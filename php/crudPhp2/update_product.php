<?php

require 'db_connect.php';

if (isset($_GET['id'])) {
  $id = $_GET['id'];

  $sql = "SELECT * FROM products WHERE id = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("i", $id);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    $name = $row['name'];
    $price = $row['price'];
    $description = $row['description'];
  } else {
    header("Location: index.php");
    exit;
  }

  $stmt->close();
}

if (isset($_POST['submit'])) {
  $id = $_POST['id'];
  $name = $_POST['name'];
  $price = $_POST['price'];
  $description = $_POST['description'];

  $sql = "UPDATE products SET name = ?, price = ?, description = ? WHERE id = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ssds", $name, $price, $description, $id);

  if ($stmt->execute()) {
    header("Location: index.php");
  } else {
    echo "Error: " . $conn->error;
  }

  $stmt->close();
  $conn
