<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");  // Redirect to login if not logged in
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="chat-container">
    <div id="chat-box" class="chat-box"></div>
    <div class="input-container">
        <input type="text" id="message" placeholder="Type a message" required>
        <button onclick="sendMessage()">Send</button>
    </div>
    
    <!-- Logout Button positioned below the text box -->
    <form action="logout.php" method="POST">
        <button type="submit" class="logout-button">Logout</button>
    </form>
</div>

<script src="chat.js"></script>

</body>
</html>
