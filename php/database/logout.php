<?php
session_start();
$_SESSION['user'] = null;
$_SESSION = array();
session_destroy();
    
header("Location: ../system/form.php");