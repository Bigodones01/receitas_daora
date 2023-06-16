<?php
    require "../database/signin.php";
    require "../scripts/loginCheck.php";
    if(isset($_SESSION['login']) && $_SESSION['login'] === true) {
        header('Location: page.php');
        exit;
    }
?>

    <title>Cadastrar</title>
    <link rel="stylesheet" type="text/css" href="../../css/form.css">
    <link rel="stylesheet" type="text/css" href="../../css/glass.css">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style> * {font-family: 'Fira Sans';} </style>

<body>
<div class="mainglass">
    <form action="signin.php" method="post" enctype="multipart/form-data">
        <h1 style='text-align: center; margin-top: 10px; margin-bottom: 10px;'>CRIAR CONTA</h1>

        <label for="name">Nome</label><br>
        <input type="text" name="name" id="name" placeholder="Nome" value='<?php echo isset($name) ? $name : ""; ?>'
        oninput="checking();"><br>

        <label for="photo">Foto</label><br>
        <input type="file" name="photo" id="photo"><br>

        <label for="email">Endereço de email</label><br>
        <input type="email" name="email" id="email" placeholder="exemplo@dominio.com" value='<?php echo isset($email) ? $email : ""; ?>'
        oninput="checking();"><br>

        <label for="pass">Senha</label><br>
        <input type="password" name="pass" id="pass" placeholder="Senha" 
        oninput="checking();"><br>

        <label for="cpass">Confirmar Senha</label><br>
        <input type="password" name="cpass" id="cpass" placeholder="Senha" 
        oninput="checking();"><br>

        <?php echo isset($error_log['name']) ? $error_log['name'] : "" ?>
        <?php echo isset($error_log['email']) ? $error_log['email'] : "" ?>
        <?php echo isset($error_log['pass']) ? $error_log['pass'] : "" ?>
        <?php echo isset($error_log['cpass']) ? $error_log['cpass'] : "" ?>

        <br>
        
        <button type="submit" id='criar' class='btnlogin btndisabled' disabled>Entrar</button>
    </form>
</div>

<?php include "../template/waves.php"; ?>

<script src="../../scripts/checksignin.js"></script>
</body>