<?php
$user = "root";
$host = "localhost";
$password = "senha";
$database = "ordem";
$connection = mysqli_connect($host, $user, $password, $database);
if (!$connection) {
    echo ("Erro de conexão:" . mysqli_connect_error($connection));
}
