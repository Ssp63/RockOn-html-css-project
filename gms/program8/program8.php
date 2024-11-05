<?php
// String Operations in PHP

// 1. String Initialization
$string1 = "Hello";
$string2 = "World";
$combinedString = $string1 . " " . $string2;

// 2. String Length
$stringLength = strlen($combinedString);

// 3. Substring Extraction
$substring = substr($combinedString, 0, 5); // Extracts "Hello"

// 4. String Replacement
$replacedString = str_replace("World", "PHP", $combinedString); // Replaces "World" with "PHP"

// 5. String to Uppercase and Lowercase
$uppercaseString = strtoupper($combinedString); // Converts to "HELLO WORLD"
$lowercaseString = strtolower($combinedString); // Converts to "hello world"

// 6. Finding a Substring
$position = strpos($combinedString, "World"); // Finds the position of "World"

// 7. String Trimming
$trimmedString = trim("   Hello World   "); // Removes spaces from the start and end

// Output Results
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP String Operations</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }
        .output {
            background-color: #ffffff;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        h1 {
            color: #007bff;
        }
    </style>
</head>
<body>

<h1>PHP String Operations Example</h1>

<div class="output">
    <h2>1. String Initialization</h2>
    <p><strong>String 1:</strong> <?php echo $string1; ?></p>
    <p><strong>String 2:</strong> <?php echo $string2; ?></p>
    <p><strong>Combined String:</strong> <?php echo $combinedString; ?></p>
</div>

<div class="output">
    <h2>2. String Length</h2>
    <p><strong>Length of Combined String:</strong> <?php echo $stringLength; ?></p>
</div>

<div class="output">
    <h2>3. Substring Extraction</h2>
    <p><strong>Extracted Substring:</strong> <?php echo $substring; ?></p>
</div>

<div class="output">
    <h2>4. String Replacement</h2>
    <p><strong>Replaced String:</strong> <?php echo $replacedString; ?></p>
</div>

<div class="output">
    <h2>5. String Case Conversion</h2>
    <p><strong>Uppercase String:</strong> <?php echo $uppercaseString; ?></p>
    <p><strong>Lowercase String:</strong> <?php echo $lowercaseString; ?></p>
</div>

<div class="output">
    <h2>6. Finding a Substring</h2>
    <p><strong>Position of "World":</strong> <?php echo $position !== false ? $position : 'Not found'; ?></p>
</div>

<div class="output">
    <h2>7. String Trimming</h2>
    <p><strong>Trimmed String:</strong> "<?php echo $trimmedString; ?>"</p>
</div>

</body>
</html>
