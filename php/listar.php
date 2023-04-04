<?php

    //incluir a conexão
    include("conexao.php");

    //SQL
    $sql = "SELECT * FROM cursos";

    //executar comando
    $executar = mysqli_query($conexao, $sql);

    //vetor

    $cursos = [];

    //indice
    $indice = 0;

    //laço de repetição p add no json
    while($linha = mysqli_fetch_assoc($executar)){
        $cursos[$indice]['idCurso'] = $linha['idCurso'];
        $cursos[$indice]['nomeCurso'] = $linha['nomeCurso'];
        $cursos[$indice]['valorCurso'] = $linha['valorCurso'];
        $indice++;
    }

    //JSON
    json_encode(['cursos'=> $cursos]);

    //verificar se o json está funcionando no phpmyadmin
    //var_dump($cursos);

    

?>
