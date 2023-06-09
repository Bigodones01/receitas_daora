<?php

$host = "127.0.0.1";
$user = "root";
$password = "";
$database = "receitasdaora";
$port = 3306;

$connect = new mysqli($host, $user, $password, $database, $port);

if($connect->connect_error) {
    die("Erro de conexão: " . $connect->connect_error);
}