<?php
    session_start();
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    header('Location: ambientealuno.php');
?>