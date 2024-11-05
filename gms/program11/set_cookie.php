<?php
// Check if the cookie is already set
if (isset($_COOKIE['username'])) {
    $username = $_COOKIE['username'];
} else {
    $username = '';
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars(trim($_POST['username']));
    
    // Set a cookie that expires in 30 days
    setcookie('username', $username, time() + (30 * 24 * 60 * 60), "/");
    // Redirect to the same page to see the effect
    header("Location: set_cookie.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set Cookie</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }
        .form-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            max-width: 300px;
            margin: auto;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px;
            cursor: pointer;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<h1>Set Cookie</h1>

<div class="form-container">
    <form action="set_cookie.php" method="POST">
        <label for="username">Enter your name:</label>
        <input type="text" id="username" name="username" value="<?php echo $username; ?>" required>
        <input type="submit" value="Set Cookie">
    </form>
</div>

<?php
if ($username) {
    echo "<p>Cookie 'username' is set to: <strong>$username</strong></p>";
}
?>

</body>
</html>
