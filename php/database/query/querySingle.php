<?php
    require_once "../database/connection.php";

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT idReceita, nome, usuario, ingredientes, tempoPreparo, modoPreparo, bancoreceita.foto 
        FROM bancoreceita INNER JOIN bancousuario ON bancoreceita.autor = bancousuario.idUsuario WHERE idReceita = ? ";
        $command = $connect->prepare($sql);
        $command->bind_param("i", $id);
        $command->execute();
        
        $result = $command->get_result();
        
        $receita = $result->fetch_assoc();
        
        $ident = $receita['idReceita'];

        $ingre = $receita['ingredientes'];
        $ingredientes = explode(";", $ingre);
        $resingre = implode("\n", $ingredientes);

        $modp = $receita['modoPreparo'];
        $modoPreparo = explode(";", $modp);
        $resmodp = implode("\n", $modoPreparo);
    }