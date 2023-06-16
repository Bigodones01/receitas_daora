<?php
session_start();
if(!isset($_SESSION['login'])) {
    header("Location: ../../home/login.php");
}

require_once "../../database/connection.php";

if(isset($_GET['id'])) {
    $sql = "DELETE FROM bancoreceita WHERE idReceita = ? ";

    $command = $connect->prepare($sql);
    $command->bind_param("i", $_GET['id']);
    $command->execute();

    header('Location: ../../home/recipes.php');
}