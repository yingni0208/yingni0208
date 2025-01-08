<?php
session_start();

// Only proceed if the request method is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Destroy the session
    session_destroy();
    header("Location: login.php");  // Redirect to login page after logout
    exit();
}
?>
