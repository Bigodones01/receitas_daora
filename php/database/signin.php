<?php
require_once "../database/connection.php";

if(isset($_POST['pass'])) {
    if($_POST['pass'] != $_POST['cpass']) {
        $error_log['cpass'] = '<label id="formwarning">As senhas não coincidem!</label>';
        $name = $_POST['name'];
        $email = $_POST['email'];
        return;
    } }

if(isset($_POST['name']) || isset($_POST['email'])) {
    $testing = $connect->prepare("SELECT * FROM bancousuario WHERE usuario = ? OR email = ?;");
    $testing->bind_param("ss", $_POST['name'], $_POST['email']);
    $testing->execute();
    $tests = $testing->get_result();
    $test = $tests->fetch_assoc();

    if(strcasecmp($test['usuario'], $_POST['name']) == 0) {
        $error_log['name'] = "<label id='formwarning'>Esse nome já existe!</label>";
        return;
    }

    if($test['email']) {
        $error_log['email'] = "<label id='formwarning'>Esse email já existe!</label>";
        return;
    }
}

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['pass'])) {
    require_once "../scripts/processPhoto.php";

    $name = $_POST['name'];
    $mail = $_POST['email'];
    $pass = password_hash($_POST['pass'], PASSWORD_BCRYPT);
    
    $command = $connect->prepare("INSERT INTO bancousuario (`usuario`, `email`, `senha`, `foto`) VALUES ( ?, ?, ?, ?);");
    $command->bind_param("ssss", $name, $mail, $pass, $photo);
    $command->execute();

    header("Location: ../home/login.php");
}    

if(isset($_SESSION['id'])) {
    session_start();
    header("Location: ../home/page.php");
    exit;
}