<?php require_once "../database/login.php"; ?>

<head>
    <title>Entrar</title>
</head>
<body>
<form action="form.php" method="post">
    <?php if(isset($login_error)): ?>
    <p><?php echo $login_error; ?></p>
    <?php endif; ?>
    <label>Email</label>
    <input type="email" name="email" id="email" 
    pattern="[a-zA-Z0-9._]+@[a-z0-9.-]+\.[a-z]{2,}$" oninput="checking()"><br>
    <label>Senha</label>
    <input type="password" name="pass" id="pass" oninput="checking()"><br>
    <button type="submit" id='btnLogin' disabled>Entrar</button>
</form>
<script>
    function checking() {
        let emailCheck = (document.getElementById('email').value != "") ? true : false;
        let passCheck = (document.getElementById('pass').value != "") ? true : false;

        if(emailCheck && passCheck) {
            document.getElementById('btnLogin').disabled = false;
        } else {
            document.getElementById('btnLogin').disabled = true;
        }
    }
</script>
</body>