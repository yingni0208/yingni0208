<?php
include 'db.php';  // Include the database connection

// Retrieve messages from the database
$result = $conn->query("SELECT username, message, timestamp FROM messages ORDER BY timestamp ASC");

$messages = [];

// Check if there are any messages
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $messages[] = $row;
    }
}

// Return messages as JSON
echo json_encode($messages);

$conn->close();  // Close the database connection
?>
