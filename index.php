<?php
session_start();
if (!isset($_SESSION["conversation"])) {
    $_SESSION["conversation"] = [];
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
    <title>Chatbot</title>

</head>
<body>
    <div class="chat-header">
        <div class="container">
            <div class="chat-header-content">
                <h1>Chatbot</h1>
                <button class="btn btn-outline-warning" onclick="clearSession()">Clear conversation</button>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="chat-output">
            <?php
            if (empty($_SESSION["conversation"])) {
                echo "<p>Start chat</p>";
            } else {
                foreach ($_SESSION["conversation"] as $conversation) {
                    echo <<<HTML
                        <div class="right">
                            <div class="chat-question">
                                <p>{$conversation[0]}</p>
                            </div>
                        </div>
                        <div class="left">
                            <div class="chat-answer">
                                <p>{$conversation[1]}</p>
                            </div>
                        </div>
                    HTML;
                }
            }
            ?>
        </div>
    </div>

    <div class="chat-input">
        <div class="container">
            <form id="question-form" class="question-form">
                <textarea class="form-control" name="message" id="message" rows="3" placeholder="What is your question? (Press enter)"></textarea>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="main.js"></script>
</body>
</html>

