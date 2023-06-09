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
            $_SESSION['user'] = $user->nome;
            header("Location: ../system/page.php");
        } else if($user->senha != $pass) {
            $error_log['pass'] = "Não é a senha correta! Tenta de novo!";
        }
    } else {
        $error_log['mail'] = "Esse email não está cadastrado no sistema!";
    }
}