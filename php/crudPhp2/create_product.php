<?php

require 'db_connect.php';

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $price = $_POST['price'];
  $description = $_POST['description'];

  $sql = "INSERT INTO products (name, price, description) VALUES (?, ?, ?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ssd", $name, $price, $description);

  if ($stmt->execute()) {
    header("Location: index.php");
  } else {
    echo "Error: " . $conn->error;
  }

  $stmt->close();
  $conn->close();
}
