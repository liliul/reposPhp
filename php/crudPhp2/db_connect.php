<?php

$dbHost = "172.17.0.2";
$dbUsername = "root";
$dbPassword = "root";
$dbName = "crud_db";

$conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
