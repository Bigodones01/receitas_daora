<?php
    session_start();
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
    <link rel="stylesheet" href="../../css/glass.css">
</head>
<body style='overflow-y: hidden !important;'>
<div class="main">
    <div class='list' style='flex-direction: column;'>
        <div class='glass' style='margin-left: 12.5%; margin-right: 12.5%; position: relative; 
            padding-top: 12.5px; padding-bottom: 12.5px; font-size: 20px; text-align: justify;'>
        Olá, <?php echo isset($_SESSION['user']) ? $_SESSION['user'] : "Guest" ; ?>!
        </div> <br>
        <?php if(isset($_SESSION['user'])): ?>
        <div class='glass' style='padding-left: 0; padding-right: 0;'>
            <img id='superusr' src="../database/imgProfile/<?php echo $_SESSION['photo']; ?>"
            style='margin: 20px !important; width: auto; height: 130px; box-shadow: none; display: flex;'>
        </div><br>
        <div class='glass' style='margin-left: 12.5%; margin-right: 12.5%; position: relative; 
            padding-top: 12.5px; padding-bottom: 12.5px; font-size: 16px; text-align: justify; width: 40%;'>
        Clique no botão <b><i>Receitas</i></b> e navegue. Se você tiver certas permissões, 
        pode adcionar receitas, editar, ou até mesmo excluir receitas (administre com sabedoria!).
        </div>
        <?php else: ?>
        <div class='glass' style='margin-left: 12.5%; margin-right: 12.5%; position: relative; 
        padding-top: 12.5px; padding-bottom: 12.5px; font-size: 16px; text-align: justify; width: fit-content;'>
        Faça login ou crie uma conta para acessar as receitas.<br>Não vai lever mais que um minuto, isso eu garanto!
        </div>
        <?php endif; ?>
    </div>
</div>
<?php include "../template/waves.php"; ?>
</body>
</html>