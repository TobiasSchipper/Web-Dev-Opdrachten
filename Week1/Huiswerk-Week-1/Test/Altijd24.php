<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Altijd24</title>
</head>
<body>
<?php

// Functie om combinaties van de getallen te evalueren
function check_for_24($numbers) {
    $target = 24;
    $n = count($numbers);
    $operations = ['+', '-', '*', '/'];

    // Genereer alle mogelijke volgordes van de getallen
    $permutations = generate_permutations($numbers);

    foreach ($permutations as $perm) {
        // Genereer alle mogelijke combinaties van operaties
        for ($i = 0; $i < pow(4, $n - 1); $i++) {
            $ops = get_operations($i, $n - 1, $operations);

            // Probeer de gegenereerde operatie uit
            $expression = $perm[0];
            for ($j = 0; $j < $n - 1; $j++) {
                $expression .= $ops[$j] . $perm[$j + 1];
            }

            // Evalueer de expressie en kijk of deze gelijk is aan 24
            if (eval_expression($expression) == $target) {
                echo "Mogelijke expressie: $expression = $target\n";
                return;
            }
        }
    }
    echo "Geen geldige oplossing gevonden voor: " . implode(", ", $numbers) . "\n";
}

// Genereer permutaties van een array
function generate_permutations($array) {
    if (count($array) <= 1) {
        return [$array];
    }

    $permutations = [];
    for ($i = 0; $i < count($array); $i++) {
        $first = $array[$i];
        $rest = array_merge(array_slice($array, 0, $i), array_slice($array, $i + 1));
        foreach (generate_permutations($rest) as $perm) {
            array_unshift($perm, $first);
            $permutations[] = $perm;
        }
    }
    return $permutations;
}

// Genereer mogelijke sets van operaties
function get_operations($num, $length, $operations) {
    $result = [];
    for ($i = 0; $i < $length; $i++) {
        $result[] = $operations[$num % 4];
        $num = intdiv($num, 4);
    }
    return $result;
}

// Evalueer de gegeven expressie
function eval_expression($expression) {
    try {
        // Gebruik eval om de expressie te evalueren
        return eval("return $expression;");
    } catch (Exception $e) {
        return false;
    }
}

// Sets van nummers
$set1 = [6, 4, 4, 1];
$set2 = [8, 2, 6, 1];
$set3 = [6, 8, 8, 2];

// Controleer elke set
check_for_24($set1);
check_for_24($set2);
check_for_24($set3);

?>

</body>
</html>