<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taak-4</title>
</head>
<body>
<?php
$left = 5;
$right = 7;

// Waarden verwisselen zonder een nieuwe variabele of functie
$left = $left + $right; // Nu bevat $left de som van $left en $right (5 + 7 = 12)
$right = $left - $right; // Nu bevat $right de originele waarde van $left (12 - 7 = 5)
$left = $left - $right;  // Nu bevat $left de originele waarde van $right (12 - 5 = 7)

echo "Left: $left\n";  // Output: 7
echo "Right: $right\n"; // Output: 5
?>

</body>
</html>