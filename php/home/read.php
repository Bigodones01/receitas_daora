<?php 
    session_start();
    if(!isset($_SESSION['login'])) {
        header("Location: login.php");
    }

    require "../database/query/querySingle.php";
    include "../template/pageHead.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/main.css">
</head>
<body>
<div class='main' style='display: flex; flex-direction: column; align-items: center; '>
    <div class='glass' style='position: absolute;'>
        <div class='list' style='word-wrap: break-word; text-align: justify; 
            flex-direction: column !important; align-items: start;'>
            <h1><?= $receita['nome'] ?></h1>
            <h3>Por <b><?= $receita['usuario'] ?></b></h3><br>
            <img src="https://images.ecycle.com.br/wp-content/uploads/2021/05/20195924/o-que-e-paisagem.jpg" 
            style='width: auto; height: 250px; display: block; margin-left: auto; margin-right: auto;'><br><br>
            <h3> <b>Ingredientes: </b> </h3>
            <?php 
                $instrucao = $receita['ingredientes'];
                $itens = explode(";", $instrucao);
                echo "<ul>";
                foreach($itens as $item) {
                    echo "<li>$item</li>";
                }
                echo "</ul>";
            ?><br>
            <h3><b>Como preparar:</b></h3>
            <p style='font-size: 18px;'> <?= $receita['modoPreparo'] ?> </p>
        </div>
    </div>
</div>
<!-- nome, usuario, ingredientes, tempoPreparo, modoPreparo, foto -->

<?php include "../template/waves.php"; ?>