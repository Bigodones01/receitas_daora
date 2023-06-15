<?php
    require "../database/login.php";
    require "../scripts/loginCheck.php";
    if(isset($_SESSION['login']) && $_SESSION['login'] === true) {
        header('Location: page.php');
        exit;
    }
?>

    <title>Entrar</title>
    <link rel="stylesheet" type="text/css" href="../../css/form.css">
    <link rel="stylesheet" type="text/css" href="../../css/glass.css">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style> * {font-family: 'Fira Sans';} </style>

<body>
<div class="mainglass">
    <form action="login.php" method="post">
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

<?php include "../template/waves.php"; ?>

<script src="../../scripts/checklogin.js"></script>
</body>