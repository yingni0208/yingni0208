<?php
// Database connection settings
$servername = "localhost";  // Hostname (usually localhost for local setups)
$username = "root";         // Database username (default is "root" for XAMPP)
$password = "";             // Database password (default is empty for XAMPP)
$dbname = "chat_db";        // Your database name

// Create a connection to MySQL using the mysqli object-oriented approach
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection is successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Now you can use $conn for further database interactions
?>
