<?php
    //print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty(($_POST['email'])) && !empty(($_POST['senha'])) )
    {
        //Vai acessa
        include_once('configuracao.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        //print_r('Email: ' . $email);
        //print_r('<br>');
        //print_r('Senha: ' . $senha);

        $sql = "SELECT * FROM tblalunos WHERE email = '$email' and senha = '$senha'";

        $resultado = $conexao->query($sql);

        //print_r($sql);
        //print_r($resultado);

        if(mysqli_num_rows($resultado) < 1)
        {
            header('Location: loginaluno.php');
            //print_r("Não Existe");
        }
        else
        {
            header('Location: ambientealuno.php');
            //print_r("Existe");
        }
    }
    else
    {
        //Não acessa
        header('Location: loginaluno.php');
    }
?>