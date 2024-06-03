<?php 
    if (isset($_GET["id"])) {
        $id = $_GET["id"];

        $serverName = "localhost";
        $userName = "root";
        $password = "";
        $database = "myshop";

        // criar conecxão
        $connection = new mysqli($serverName, $userName, $password, $database);

        $sql = "DELETE FROM clientsMyshop WHERE id=$id";
        $connection->query($sql);
    }

    header("location: /reposPhp/php/crudPhp1/index.php");
    exit;
?>