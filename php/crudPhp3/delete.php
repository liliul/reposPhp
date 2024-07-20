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

    // SQL statement to delete data
    $sql = "DELETE FROM itens WHERE id = :id";

    // Prepare the SQL statement
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bindParam(':id', $id);

    // Set parameters and execute
    $id = 1; // Example ID
    $stmt->execute();

    echo "Record deleted successfully";
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Close the connection
$conn = null;
?>

