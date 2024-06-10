<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Select the database to use
$database_name = "FirstConnection";
$sql = "USE $database_name";
if ($conn->query($sql) === FALSE) {
    echo "Error selecting database: " . $conn->error;
}
?>
