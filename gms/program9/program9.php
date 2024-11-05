<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
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
            max-width: 400px;
        }
        input[type="text"], select {
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

<h1>Student Form</h1>

<div class="form-container">
    <form action="program3.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="prn">PRN:</label>
        <input type="text" id="prn" name="prn" required>

        <label for="subject">Subject:</label>
        <select id="subject" name="subject" required>
            <option value="">Select a subject</option>
            <option value="CA">CA</option>
            <option value="DBE">DBE</option>
            <option value="WT">WT</option>
        </select>

        <input type="submit" value="Submit">
    </form>
</div>

<?php
// Handle the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect the input data
    $name = htmlspecialchars(trim($_POST['name']));
    $prn = htmlspecialchars(trim($_POST['prn']));
    $subject = htmlspecialchars(trim($_POST['subject']));

    // Display the submitted data
    echo "<div class='form-container'>";
    echo "<h2>Submitted Data:</h2>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>PRN:</strong> $prn</p>";
    echo "<p><strong>Subject:</strong> $subject</p>";
    echo "</div>";
}
?>

</body>
</html>
