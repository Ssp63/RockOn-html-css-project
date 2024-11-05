<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Cookie</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }
        .message-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            max-width: 300px;
            margin: auto;
        }
        a {
            text-decoration: none;
            color: #007bff;
        }
    </style>
</head>
<body>

<h1>Display Cookie</h1>

<div class="message-container">
    <?php
    // Check if the cookie is set
    if (isset($_COOKIE['username'])) {
        echo "<p>Welcome back, <strong>" . htmlspecialchars($_COOKIE['username']) . "</strong>!</p>";
    } else {
        echo "<p>No cookie found!</p>";
    }
    ?>
    <a href="delete_cookie.php">Delete Cookie</a>
</div>

</body>
</html>
