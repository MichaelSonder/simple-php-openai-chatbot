<?php

// starts a session to store data in the browser
session_start();

// This line includes the Composer autoloader
require __DIR__ . '/vendor/autoload.php';

// import the 'Orhanerday\OpenAi\OpenAi' package
use Orhanerday\OpenAi\OpenAi;

// secret key to the API
$secretKey = 'PLACE_YOUR_OPENAI_API_KEY_HERE';

$open_ai_key = $secretKey;
$open_ai = new OpenAi($open_ai_key);

$message = $_POST["message"];

// requestform to the API function chat
$complete = $open_ai->chat([
    'model' => 'gpt-3.5-turbo',
    'messages' => [
        [
            "role" => "user",
            "content" => $message
        ]
    ],
    'temperature' => 0.9,
    'max_tokens' => 150,
    'frequency_penalty' => 0,
    'presence_penalty' => 0.6,
 ]);

 // decode json response
$response = json_decode($complete);

// Push conversation into session variable
array_push($_SESSION["conversation"], [$message, $response->choices[0]->message->content]);
?>