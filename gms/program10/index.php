<?php
// Define a title for the webpage
$title = "Welcome to My PHP Website";

// Create an array of items
$items = ["Home", "About", "Services", "Contact"];

// Define a function to display the current date
function displayCurrentDate() {
    return date("l, F j, Y");
}

// Check if a GET parameter 'page' is set and assign it to a variable
$page = isset($_GET['page']) ? $_GET['page'] : 'Home';

// Start the HTML output
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background: #007bff;
            color: #ffffff;
            padding: 10px 0;
            text-align: center;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
        }
        nav ul li {
            display: inline;
            margin: 0 15px;
        }
        nav ul li a {
            color: #ffffff;
            text-decoration: none;
        }
        nav ul li.active a {
            font-weight: bold;
            text-decoration: underline;
        }
        main {
            padding: 20px;
            background: #ffffff;
            margin: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        footer {
            text-align: center;
            padding: 10px 0;
            background: #007bff;
            color: #ffffff;
            position: relative;
            bottom: 0;
            width: 100%;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1><?php echo $title; ?></h1>
        <nav>
            <ul>
                <?php
                // Loop through the items array to create the navigation menu
                foreach ($items as $item) {
                    // Check if the current item is the selected page
                    $class = ($item === $page) ? 'class="active"' : '';
                    echo "<li $class><a href='?page=$item'>$item</a></li>";
                }
                ?>
            </ul>
        </nav>
    </header>

    <main>
        <h2><?php echo $page; ?></h2>
        <p>Today's date is: <?php echo displayCurrentDate(); ?></p>

        <?php
        // Conditional statement to display different content based on the page
        switch ($page) {
            case 'About':
                echo "<p>This is the About page. We provide various services.</p>";
                break;
            case 'Services':
                echo "<p>These are our services: Web Development, SEO, Marketing.</p>";
                break;
            case 'Contact':
                echo "<p>Contact us at: info@example.com</p>";
                break;
            case 'Home':
            default:
                echo "<p>Welcome to our homepage! Explore our website.</p>";
                break;
        }
        ?>
    </main>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> My PHP Website. All rights reserved.</p>
    </footer>
</body>
</html>
