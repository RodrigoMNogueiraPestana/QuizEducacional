<?php
    session_start();
    //print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty(($_POST['email'])) && !empty(($_POST['senha'])) && !empty(($_POST['materia'])))
    {
        //Vai acessa
        include_once('configuracao.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $materia = $_POST['materia'];

        //print_r('Email: ' . $email);
        //print_r('<br>');
        //print_r('Senha: ' . $senha);
        //print_r('<br>');
        //print_r('Materia Ministrada: ' . $materia);

        $sql = "SELECT * FROM tblprofessores WHERE email = '$email' and senha = $senha and materiaministrada = '$materia'";

        $result = $conexao->query($sql); //Essa conexão foi realizada dentro do mesmo aqrquivo (professor).

        //print_r($sql);
        //print_r($result);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            unset($_SESSION['materia']);
            header('Location: loginprofessor.php');
            //print_r("Não Existe");
        }
        else
        {
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            $_SESSION['materia'] = $materia;
            header('Location: ambienteprof.php');
            //print_r("Existe");
        }
    }
    else
    {
        //Não acessa
        header('Location: loginprofessor.php');
    }
?>