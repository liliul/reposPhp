<?php

require 'db_connect.php';

$id = $_GET['id'];

// Validate product ID (optional, see Security Considerations)
if (!isset($id) || !is_numeric($id)) {
    header("location: index.php");  // Redirect for invalid ID
    exit;
}

// Prepare and execute the deletion query
$sql = "DELETE FROM products WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    // Send headers after successful deletion
    header("location: index.php");
    exit; // Terminate script after redirection
} else {
    echo "Error deleting product: " . $conn->error;
}

$stmt->close();
$conn->close();

?>

