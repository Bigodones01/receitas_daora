<?php
session_start();
if(!isset($_SESSION['login'])) {
    header("Location: ../../home/login.php");
}

require "../../database/connection.php";

require_once "../../scripts/processPhoto.php";

$ident = $_POST['ident'];
$nome = $_POST['nome'];
$tempo = $_POST['tempo'];
$ingre = implode(';', explode("\n", $_POST['ingredientes']));
$modpre = $_POST['modpre'];

$sql = "UPDATE bancoreceita SET nome = ?, ingredientes = ?, modoPreparo = ?, tempoPreparo = ?, foto = ? WHERE idReceita = ? ";

$command = $connect->prepare($sql);
$command->bind_param("sssisi", $nome, $ingre, $modpre, $tempo, $photo, $ident);
$command->execute();

header('Location: ../../home/recipes.php');
exit();            