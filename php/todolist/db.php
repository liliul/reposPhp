<?php
$servername = "localhost";
$username = "root";
$password = ""; // senha padrão, ajuste conforme necessário
$dbname = "todo_db";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Checar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
