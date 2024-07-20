<?php
// Database credentials
$servername = "172.17.0.2";
$username = "root";
$password = "root";
$dbname = "crudPhp3";

try {
    // Connect to MySQL database
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // SQL statement to update data
    $sql = "UPDATE itens SET column1 = :new_value WHERE id = :id";

    // Prepare the SQL statement
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bindParam(':new_value', $new_value);
    $stmt->bindParam(':id', $id);

    // Set parameters and execute
    $new_value = "Updated Value";
    $id = 1; // Example ID
    $stmt->execute();

    echo "Record updated successfully";
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Close the connection
$conn = null;
?>
