<?php
    require "../database/login.php"; 
    require "../template/pageHead.php";
?>

    <title>Entrar</title>
    <link rel="stylesheet" type="text/css" href="../../css/main.css">
    <link rel="stylesheet" type="text/css" href="../../css/waves.css">
    <script src="../../scripts/check.js"></script>
</head>

<body>
<div class="ocean"> <!-- Animation made by PK.C.Ashish Kumar -->
    <div class="wave"></div>
    <div class="wave"></div>
    <div class="wave"></div>
</div>

<div class="customcont position-absolute top-50 start-50 translate-middle rounded-1 border border-2 border-primary"style="padding: 20px">
    <form action="form.php" method="post">
        <h3 class="text-center">ENTRAR</h3><br>
        <div class="form-floating mb-3">
            <input type="email" name="email" id="email" placeholder=" " class="form-control"
            pattern="[a-zA-Z0-9._]+@[a-z0-9.-]+\.[a-z]{2,}$" oninput="checking('email');"
            onblur="validate('email');">
            <label for="email">Endereço de email</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" name="pass" id="pass" placeholder=" " 
            oninput="checking('pass');" onblur="validate('pass');" class="form-control">
            <label for="pass">Senha</label>
        </div>
        <br>
        <button type="submit" id='btnLogin' disabled
        class="btn btn-secondary mx-auto p-2" style="width: 100%;">Entrar</button>
    </form>
</div>
</body>