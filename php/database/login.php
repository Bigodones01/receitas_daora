<?php
require_once "../database/connection.php";

if(isset($_POST['email']) && isset($_POST['pass'])) {
    $mail = $_POST['email'];
    $pass = $_POST['pass'];

    $error_log = [];
    
    $command = $connect->prepare("SELECT * FROM `bancousuario` WHERE `email` = ? ;");
    $command->bind_param("s", $mail);
    $command->execute();
    $result = $command->get_result();
    $user = $result->fetch_object();
    
    if($user != NULL) {
        if(password_verify($pass, $user->senha)) {
            session_start();
            $_SESSION['id'] = $user->idUsuario;
            $_SESSION['user'] = $user->usuario;
            $_SESSION['photo'] = $user->foto;
            if($user->formacao != null) {$_SESSION['grade'] = $user->formacao;}
            $_SESSION['login'] = true;
            header("Location: ../home/page.php");
            exit;
        } else {
            $pass = "";
            $error_log['pass'] = '<label id="formwarning">Não é a senha correta! Tenta de novo!</label>';
    }
    } else {
        $error_log['mail'] = '<label id="formwarning">Esse email não está cadastrado no sistema!</label>';
    }
}
if(isset($_SESSION['id'])) {
    session_start();
    header("Location: ../home/page.php");
    exit;
}