<?php

$servername = "localhost";  // Replace with your actual database server address
$username = "root";         // Replace with your actual database username
$password = "";             // Replace with your actual database password
$database = "hill_cipher";  // Replace with your actual database name


// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
