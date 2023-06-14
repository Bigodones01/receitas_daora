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
        if($user->senha == $pass) {
            session_start();
            $_SESSION['id'] = $user->idUsuario;
            $_SESSION['user'] = $user->nome;
            $_SESSION['photo'] = $user->foto;
            $_SESSION['login'] = true;
            header("Location: ../system/page.php");
            exit;
        } else if($user->senha != $pass) {
            $pass = "";
            $error_log['pass'] = '<label id="formwarning">Não é a senha correta! Tenta de novo!</label>';
    }
    } else {
        $error_log['mail'] = '<label id="formwarning">Esse email não está cadastrado no sistema!</label>';
    }
}
if(isset($_SESSION['id'])) {
    session_start();
    header("Location: ../system/page.php");
    exit;
}