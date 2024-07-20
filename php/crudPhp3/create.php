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

    // SQL statement to insert data with placeholders
    $sql = "INSERT INTO itens (column1, column2, column3) VALUES (:value1, :value2, :value3)";

    // Prepare the SQL statement
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bindParam(':value1', $value1);
    $stmt->bindParam(':value2', $value2);
    $stmt->bindParam(':value3', $value3);

    // Set parameters and execute
    $value1 = "Intel i5-2400";
    $value2 = "Amd ryzen 5600";
    $value3 = "Nvidia rtx 4080 ti";
    $stmt->execute();

    echo "New record created successfully";
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Close the connection
$conn = null;
?>

