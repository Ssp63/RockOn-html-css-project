<?php
// Control statements example in PHP

// Start the HTML output
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Control Statements Example</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }
        h1 {
            color: #007bff;
        }
        .output {
            background-color: #ffffff;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<h1>PHP Control Statements Example</h1>

<div class="output">
    <h2>1. Conditional Statements</h2>

    <?php
    // Using if-else
    $score = 75;
    echo "<strong>Score:</strong> $score<br>";
    if ($score >= 90) {
        echo "Grade: A<br>";
    } elseif ($score >= 80) {
        echo "Grade: B<br>";
    } elseif ($score >= 70) {
        echo "Grade: C<br>";
    } else {
        echo "Grade: D<br>";
    }

    // Using switch
    $day = 3; // Let's say 1 = Sunday, 2 = Monday, ..., 7 = Saturday
    echo "<strong>Day Number:</strong> $day<br>";
    switch ($day) {
        case 1:
            echo "It's Sunday.<br>";
            break;
        case 2:
            echo "It's Monday.<br>";
            break;
        case 3:
            echo "It's Tuesday.<br>";
            break;
        case 4:
            echo "It's Wednesday.<br>";
            break;
        case 5:
            echo "It's Thursday.<br>";
            break;
        case 6:
            echo "It's Friday.<br>";
            break;
        case 7:
            echo "It's Saturday.<br>";
            break;
        default:
            echo "Invalid day.<br>";
            break;
    }
    ?>
</div>

<div class="output">
    <h2>2. Looping Statements</h2>

    <?php
    // Using for loop
    echo "<strong>Using for loop:</strong><br>";
    for ($i = 1; $i <= 5; $i++) {
        echo "Number: $i<br>";
    }

    // Using while loop
    echo "<strong>Using while loop:</strong><br>";
    $j = 1;
    while ($j <= 5) {
        echo "Number: $j<br>";
        $j++;
    }

    // Using foreach loop with an array
    echo "<strong>Using foreach loop:</strong><br>";
    $fruits = ["Apple", "Banana", "Cherry", "Date"];
    foreach ($fruits as $fruit) {
        echo "Fruit: $fruit<br>";
    }
    ?>
</div>

</body>
</html>
