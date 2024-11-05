<?php
include 'db.php'; // Include database connection file

// Create operation
function createUser($name, $email) {
    global $conn;
    $stmt = $conn->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
    $stmt->bind_param("ss", $name, $email);
    return $stmt->execute();
}

// Read operation
function readUsers() {
    global $conn;
    $sql = "SELECT * FROM users";
    return $conn->query($sql);
}

// Update operation
function updateUser($id, $name, $email) {
    global $conn;
    $stmt = $conn->prepare("UPDATE users SET name=?, email=? WHERE id=?");
    $stmt->bind_param("ssi", $name, $email, $id);
    return $stmt->execute();
}

// Delete operation
function deleteUser($id) {
    global $conn;
    $stmt = $conn->prepare("DELETE FROM users WHERE id=?");
    $stmt->bind_param("i", $id);
    return $stmt->execute();
}

// Handle form submissions for Create and Update
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['create'])) {
        $name = htmlspecialchars(trim($_POST['name']));
        $email = htmlspecialchars(trim($_POST['email']));
        createUser($name, $email);
    } elseif (isset($_POST['update'])) {
        $id = $_POST['id'];
        $name = htmlspecialchars(trim($_POST['name']));
        $email = htmlspecialchars(trim($_POST['email']));
        updateUser($id, $name, $email);
    }
}

// Handle Delete
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    deleteUser($id);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operations in PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #007bff;
            color: white;
        }
    </style>
</head>
<body>

<h1>CRUD Operations</h1>

<!-- Form to Create or Update User -->
<form action="" method="POST">
    <input type="hidden" name="id" id="id">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required>
    
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>
    
    <input type="submit" name="create" value="Add User">
    <input type="submit" name="update" value="Update User" style="display: none;">
</form>

<!-- Display Users -->
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php
        // Fetch and display users
        $result = readUsers();
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['email']}</td>
                    <td>
                        <a href='#' onclick='editUser({$row['id']}, \"{$row['name']}\", \"{$row['email']}\")'>Edit</a> |
                        <a href='?delete={$row['id']}'>Delete</a>
                    </td>
                </tr>";
        }
        ?>
    </tbody>
</table>

<script>
function editUser(id, name, email) {
    document.getElementById('id').value = id;
    document.getElementById('name').value = name;
    document.getElementById('email').value = email;
    document.querySelector('input[name="create"]').style.display = 'none';
    document.querySelector('input[name="update"]').style.display = 'inline';
}
</script>

</body>
</html>
