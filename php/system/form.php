<?php
    require "../database/login.php"; 
    include "../template/pageHead.php";
    if(isset($_SESSION['login']) && $_SESSION['login'] === true) {
        header('Location: page.php');
        exit;
    }
?>

    <title>Entrar</title>
    <link rel="stylesheet" type="text/css" href="../../css/form.css">
    <link rel="stylesheet" type="text/css" href="../../css/waves.css">

<body>
<div class="customcont">
    <form action="form.php" method="post">
        <h1 style='text-align: center;'>ENTRAR</h1><br>
        <label for="email">Endereço de email</label><br>
        <input type="email" name="email" id="email" placeholder="exemplo@dominio.com"  
        oninput="checking();"><br>
        <label for="pass">Senha</label><br>
        <input type="password" name="pass" id="pass" placeholder="Senha" 
        oninput="checking();"><br>
        <?php echo isset($error_log['mail']) ? $error_log['mail'] : "" ?>
        <?php echo isset($error_log['pass']) ? $error_log['pass'] : "" ?>
        <br>
        <button type="submit" id='logar' class='btnlogin btndisabled' disabled>Entrar</button>
    </form>
</div>

<div class="ocean"> <!-- Animation made by PK.C.Ashish Kumar -->
    <div class="wave"></div>
    <div class="wave"></div>
    <div class="wave"></div>
</div>
<script src="../../scripts/check.js"></script>
</body>