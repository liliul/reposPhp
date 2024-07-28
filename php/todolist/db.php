<?php
$servername = "172.17.0.2";
$username = "root";
$password = "root";
$dbname = "todolistDB";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Checar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
