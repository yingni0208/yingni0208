<?php
session_start();
include 'db.php';

if (isset($_SESSION['user_id'])) {
    if (isset($_POST['message'])) {
        $userId = $_SESSION['user_id'];
        $message = $_POST['message'];

        // Get the username of the logged-in user
        $stmt = $conn->prepare("SELECT username FROM users WHERE id = ?");
        $stmt->bind_param("i", $userId);
        $stmt->execute();
        $stmt->bind_result($username);
        $stmt->fetch();
        $stmt->close();

        // Insert message into the database
        $message = $conn->real_escape_string($message);
        $stmt = $conn->prepare("INSERT INTO messages (user, message) VALUES (?, ?)");
        $stmt->bind_param("ss", $username, $message);
        $stmt->execute();
        $stmt->close();
    }
}

$conn->close();
?>
