<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "receitasdaora";
$port = 3306;

$connect = new mysqli($host, $user, $password, $database, $port);

if($connect->connect_error) {
    die("Erro de conexão: " . $connect->connect_error);
}