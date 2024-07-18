<?php

require 'db_connect.php';

$sql = "SELECT * FROM products";
$result = $conn->query($sql);

echo "<!DOCTYPE html>
<html lang='pt-br'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Editar Produto</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH' crossorigin='anonymous'>
</head>";

echo "<div class='container my-5'>";
echo "<a class='btn btn-primary mb-3' href='create_product.php'>Criar Novo Produto</a>";

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='product mb-4 p-3 border rounded'>";
        echo "<h3>" . htmlspecialchars($row['name']) . "</h3>";
        echo "<p><strong>Preço:</strong> " . htmlspecialchars($row['price']) . "</p>";
        echo "<p><strong>Descrição:</strong> " . htmlspecialchars($row['description']) . "</p>";
        echo "<a class='btn btn-warning' href='update_product.php?id=" . htmlspecialchars($row['id']) . "'>Editar</a> ";
        echo "<a class='btn btn-danger' href='delete_product.php?id=" . htmlspecialchars($row['id']) . "' onclick='return confirm(\"Tem certeza que deseja deletar este produto?\");'>Deletar</a>";
        echo "</div>";
    }
} else {
    echo "<div class='alert alert-info'>Nenhum produto encontrado.</div>";
}

$conn->close();
echo "</div>";
?>
