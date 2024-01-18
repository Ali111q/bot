<?php

// Replace this with your actual bot token
$botToken = 'YOUR_BOT_TOKEN';

// Set the Telegram API endpoint
$apiUrl = 'https://api.telegram.org/bot' . $botToken;

// Get updates from Telegram
$update = json_decode(file_get_contents('php://input'), true);

// Check if a message was sent and if it's the /start command
if (isset($update['message']) && $update['message']['text'] == '/start') {
    $chatId = $update['message']['chat']['id'];

    // Send the "Hello" message
    $response = file_get_contents($apiUrl . '/sendMessage?chat_id=' . $chatId . '&text=Hello!');

    // Check for errors
    if ($response === false) {
        echo "Error sending message";
    }
}

?>
