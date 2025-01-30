<?php
// Read input from the user
$input = trim(fgets(STDIN));

// Split the input string into an array
$parts = explode(' ', $input);

// Assign the values to variables using the list function
list($w, $b, $f) = $parts;

// Custom function to find the minimum value
function custom_min($a, $b, $c) {
    if ($a <= $b && $a <= $c) {
        return $a;
    } elseif ($b <= $a && $b <= $c) {
        return $b;
    } else {
        return $c;
    }
}

// Function to calculate the number of complete toy cars
function build_toy_cars($w, $b, $f) {
    // Each toy car needs 4 wheels, 1 car body, and 2 figures
    $cars_from_w = intdiv($w, 4);
    $cars_from_b = $b;
    $cars_from_f = intdiv($f, 2);

    // The number of complete toy cars is the minimum of the above values
    $complete_cars = custom_min($cars_from_w, $cars_from_b, $cars_from_f);
    return $complete_cars;
}

// Calculate the number of complete toy cars
$result = build_toy_cars($w, $b, $f);
echo $result;
?>
