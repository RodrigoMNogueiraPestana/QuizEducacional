<?php
    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'bdprojetoltd';

    $conexao = new mysqli( $dbHost, $dbUsername,$dbPassword,$dbName);

    //if($conexao->connect_errno)
    //{
        //echo "Erro";
    //}
    //else
    //{
        //echo "Conexao efetuada com sucesso";
    //}
?>