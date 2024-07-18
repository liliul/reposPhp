<?php

require 'db_connect.php';

$sql = "SELECT * FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    echo "<br>";
    echo "<a class='btn-primary' href='create_product.php'>criar novo produto</a>";
    echo "<div class='product'>";
    echo "<h3>" . $row['name'] . "</h3>";
    echo "<p>Price: " . $row['price'] . "</p>";
    echo "<p>" . $row['description'] . "</p>";
    echo "<a href='update_product.php?id=" . $row['id'] . "'>Edit</a> ";
    echo "<a href='delete_product.php?id=" . $row['id'] . "'>Delete</a>";
    echo "</div>";
  }
} else {
  echo "No products found";
}

$conn->close();
?>
