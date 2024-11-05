<?php
$host = 'localhost'; // Database host
$db = 'test_db'; // Database name
$user = 'root'; // Database username (default is usually 'root' for XAMPP/MAMP)
$pass = ''; // Database password (default is empty for XAMPP/MAMP)

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
