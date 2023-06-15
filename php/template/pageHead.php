<?php 
    if(!isset($_SESSION)) {session_start();}
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../css/topbar.css">
    <style>
        * {
            font-family: 'Fira Sans';
        }
    </style>
</head>
<body>
<div class="topbar">
    <div class="mainbuttons">
        <a class='topbuttons'>Receitas Daora</a>
        <a class='topbuttons'>Receitas</a>
    </div>
    <div class="loginuser">
    <?php if(isset($_SESSION['login']) && $_SESSION['login'] === true && $_SESSION['user'] == 'admin'): ?>
        <script src="../../scripts/btnenable.js"></script>
        <div class='logged-in'>
            <a class='topbuttons disable' id='dashbord'>Dashboard</a>
            <a class='topbuttons btndanger' href='../database/logout.php'>Logout</a>
            <a class='topbuttons' onclick='dashboard()'><?php echo $_SESSION['user']; ?></a>
            <img id='superusr' src="../database/imgProfile/<?php echo $_SESSION['photo']; ?>">
        </div>
        </div>
    <?php elseif(isset($_SESSION['login']) && $_SESSION['login'] === true): ?>
        <div class='logged-in'>
            <a class='topbuttons btndanger' href='../database/logout.php'>Logout</a>
            <a class='topbuttons'><?php echo $_SESSION['user']; ?></a>
            <img id='user-login' src="../database/imgProfile/<?php echo $_SESSION['photo']; ?>">
        </div>
        </div>
    <?php else: ?>
        <a href='../home/login.php' class='topbuttons'>Login</a>
        <a href='../home/signin.php' class='topbuttons'>Criar conta</a>
    <?php endif; ?>
    </div>
</div>
