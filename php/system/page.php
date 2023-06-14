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
</head>
<body>
<div class="main">
    Welcome, <?php echo isset($_SESSION['user']) ? $_SESSION['user'] : "Guest" ; ?>
</div>
<?php include "../template/waves.php"; ?>
</body>
</html>