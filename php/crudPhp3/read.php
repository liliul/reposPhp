<?php
// Example of selecting data from MySQL using PDO

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

    // SQL statement to select data
    $sql = "SELECT * FROM itens";

    // Prepare the SQL statement
    $stmt = $conn->prepare($sql);

    // Execute the statement
    $stmt->execute();

    // Fetch all rows as an associative array
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Print out the results
    foreach($result as $row) {
        echo "Column 1: " . $row['column1'] . ", Column 2: " . $row['column2'] . ", Column 3: " . $row['column3'] . "<br>";
    }
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Close the connection
$conn = null;
?>
