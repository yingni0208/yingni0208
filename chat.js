// Function to handle sending a message
function sendMessage() {
    const messageInput = document.getElementById('message');
    const message = messageInput.value.trim();

    if (message !== "") {
        // Create a new div element to display the message
        const chatBox = document.getElementById('chat-box');
        const messageDiv = document.createElement('div');
        messageDiv.classList.add('message');
        messageDiv.textContent = message;

        // Append the new message to the chat box
        chatBox.appendChild(messageDiv);

        // Scroll the chat box to the bottom
        chatBox.scrollTop = chatBox.scrollHeight;

        // Clear the input field
        messageInput.value = "";

        // Optionally, you could send the message to the server here via AJAX
        // Example: Use AJAX to send the message to the server and handle the response
        // sendToServer(message);
    }
}

// Optional: Listen for pressing 'Enter' to send the message
document.getElementById('message').addEventListener('keydown', function (e) {
    if (e.key === 'Enter') {
        sendMessage();
    }
});
