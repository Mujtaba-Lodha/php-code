<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>lodha mujtaba</h1>
    <?php 
    // A small calculator function
    function calculator($a, $b) {
        echo "Numbers: $a, $b<br>";
        echo "Addition: " . ($a + $b) . "<br>";
        echo "Subtraction: " . ($a - $b) . "<br>";
        echo "Multiplication: " . ($a * $b) . "<br>";
        echo "Division: " . ($a / $b) . "<br>";
        echo "Is \$a greater than \$b ? " . ($a > $b ? "Yes" : "No") . "<br>";
        echo "<br>";
    }
    
    calculator(10, 15);
    calculator(10, 15);
    ?>
    
</body>
</html> 