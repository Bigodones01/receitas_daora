<?php 
session_start();
if(!isset($_SESSION['login'])) {
    header("Location: login.php");
}

require "../database/query/queryAll.php";
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
    <style> 
        * {
            color: black;
        }
    </style>
</head>
<body>
<div class='main'>
<div class='listmain'>
<div class="list" style='flex-wrap: nowrap; align-items: flex-start; flex-direction: column;'>
    <a class='topbuttons btnadd' style='margin-right: 0; margin-left: 0;'
    href='recipeMan.php'>Adcionar Receita</a>
    <?php if($receitas == NULL): ?>
        <div class='glass' style='margin-top: 10px; margin-bottom: 10px; 
            display: flex; flex-direction: row; justify-content: space-between; width: 100%; max-width: 100%;'>
            <h1>Não existe nenhuma receita disponível.</h1>
        </div>
    <?php endif; ?>
    <?php foreach($receitas as $recipes): ?>
    <div class='glass' style='margin-top: 10px; margin-bottom: 10px; 
        display: flex; flex-direction: row; justify-content: space-between; width: 100%; max-width: 100%;'>
        <a style='text-decoration: none;'><h1><?= $recipes->nome; ?><h1></a>
        <?php if(isset($_SESSION['grade'])): ?>
            <a class='topbuttons btnedit' style='margin-right: 0; margin-left: 0;'
            href='recipeMan.php?id=<?= $recipes->idReceita ?>'>Editar</a>
            <a class='topbuttons btndang' style='margin-right: 0; margin-left: 0;'
            href='../database/query/queryDelete.php?id=<?= $recipes->idReceita ?>'>Apagar</a>
        <?php endif; ?>
        <a class='topbuttons btnadd' href='read.php?id=<?= $recipes->idReceita ?>'
            style='margin-right: 0; margin-left: 0;'>Ler</a>
    </div>
    <?php endforeach; ?>
</div>
</div>
</div>
<?php include "../template/waves.php"; ?>
</body>
</html>