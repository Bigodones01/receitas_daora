<?php 
    session_start();
    if(!isset($_SESSION['login'])) {
        header("Location: login.php");
    }

    include "../template/pageHead.php";
    require "../database/query/querySingle.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receita</title>
    <link rel="stylesheet" type="text/css" href="../../css/main.css">
    <link rel="stylesheet" type="text/css" href="../../css/form.css">
    <link rel="stylesheet" type="text/css" href="../../css/glass.css">
</head>

<body>
<div class='main'>
<div class='mainglass' style='margin-top: 170px;'>
    <form action='<?php echo isset($receita) ? "../database/query/queryUpdate.php" : "../database/query/queryAdd.php"; ?>' method="post" enctype='multipart/form-data'>
        <h1 style='text-align: center;'>
            <?php echo isset($receita) ? 
            'ATUALIZAR' : 'INSERIR'; ?></h1><br>
        <?php if(isset($receita)): ?>
        <input type="hidden" name='ident' id='ident' value='<?= $ident; ?>'>
        <label>Cu penis</label>
        <?php endif; ?>

        <label for="nome">Nome da receita</label>
        <input type="text" name='nome' id='nome' placeholder='Nome da receita' 
        oninput='checkform()' value='<?php echo $receita['nome'] ?? ''; ?>'><br>

        <label for="autor">Autor: <?= $_SESSION['user']; ?> (automático)</label><br><br>
        <input type="hidden" name='autor' value='<?php echo $_SESSION['id'] ?? ''; ?>' disabled>

        <label for="tempo">Tempo de preparo (minutos)</label>
        <input type="number" name='tempo' id='tempo' 
        oninput='checkform()' value='<?php echo $receita['tempoPreparo'] ?? ''; ?>'><br>

        <label for="photo">Foto <?php echo(isset($receita)) ? '(Ignore se não quiser atualizar)' : '' ?></label>
        <br><input type="file" name='photo' id='photo' oninput='checkform()'><br>

        <label for="ingredi">Ingredientes</label><br>
        <textarea name="ingredientes" id="ingredientes" cols="30" rows="10"  oninput='checkform()'
        placeholder='Faça uma lista sempre quebrando linha para cada elemento.'><?php echo isset($resingre) ? htmlspecialchars($resingre) : ""; ?></textarea>

        <label for="modpre">Modo de Preparo</label><br>
        <textarea name="modpre" id="modpre" cols="30" rows="10"  oninput='checkform()'
        placeholder='Explique o mais detalhadamente possível de como executar a receita'
        ><?php echo isset($resmodp) ? htmlspecialchars($resmodp) : '' ; ?></textarea>

        <button type="submit" id='cadastro' class='btnlogin btndisabled' disabled>Pronto</button>
        <label><?php echo isset($errorlog) ? $errorlog : '' ?></label>
    </form>
    <script src="../../scripts/recipecheck.js"></script>
</div>
</div>

<?php include "../template/waves.php"; ?>
