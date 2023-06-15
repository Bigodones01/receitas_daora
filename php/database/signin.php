<?php
require_once "../database/connection.php";

$error_log = [];

if(isset($_POST['pass'])) {
    if($_POST['pass'] != $_POST['cpass']) {
        $error_log['cpass'] = '<label id="formwarning">As senhas não coincidem!</label>';
        $name = $_POST['name'];
        $email = $_POST['email'];
        return;
    } }

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['pass'])) {
    require_once "../scripts/processPhoto.php";

    $name = $_POST['name'];
    $mail = $_POST['email'];
    $pass = $_POST['pass'];
    
    $command = $connect->prepare("INSERT INTO bancousuario (`nome`, `email`, `senha`, `foto`) VALUES ( ?, ?, ?, ?);");
    $command->bind_param("ssss", $name, $mail, $pass, $photo);
    $command->execute();

    header("Location: ../home/login.php");
}    

if(isset($_SESSION['id'])) {
    session_start();
    header("Location: ../home/page.php");
    exit;
}