<?php
    require_once "../database/connection.php";

    $sql = "SELECT * FROM `bancoReceita`";
    $command = $connect->prepare($sql);
    $command->execute();

    $result = $command->get_result();

    $receitas = [];

    while($receita = $result->fetch_object()) {
        $receitas[] = $receita;
    }