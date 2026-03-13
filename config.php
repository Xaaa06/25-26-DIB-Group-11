<?php
// Database configuration
$servername = "localhost"; // Change if your database is on a different server
$username = "root";
$password = "root";
$dbname = "comp1044_database"; // Database name from your SQL file

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>