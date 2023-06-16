<?php
session_start();
if(!isset($_SESSION['login'])) {
    header("Location: ../../home/login.php");
}

require_once "../../database/connection.php";
require "../../scripts/processRecipe.php";

if(isset($_POST['nome']) && isset($_POST['tempo']) && 
    isset($_POST['ingredientes']) && isset($_POST['modpre'])) {

        $nome = $_POST['nome'];
        $autor = $_SESSION['id'];
        $tempo = $_POST['tempo'];
        $ingre = implode(';', explode("\n", $_POST['ingredientes']));
        $modpre = $_POST['modpre'];

        $sql = "INSERT INTO bancoreceita (`nome`, `autor`, `ingredientes`, `modoPreparo`, `tempoPreparo`, `foto`) VALUES (?, ?, ?, ?, ?, ?);";

        $command = $connect->prepare($sql);
        $command->bind_param("sissis", $nome, $autor, $ingre, $modpre, $tempo, $photo);
        $command->execute();

        header('Location: ../../home/recipes.php');
    }