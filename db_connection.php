<?php
// Database connection settings
$servername = "localhost";  // Use 'localhost' for local server
$username = "root";         // Default username for WAMP
$password = "";             // Default password for 'root' is usually empty
$dbname = "angelo_rufc";  // Replace with your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Uncomment the line below to confirm successful connection
// echo "Connected successfully";
?>
