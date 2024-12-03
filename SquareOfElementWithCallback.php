<?php

// A function to apply a callback to each element of an array
function applyCallback(array $arr, callable $callback) {
    $result = [];
    foreach ($arr as $value) {
        $result[] = $callback($value);
    }
    return $result;
}

// Example callback function
function square($n) {
    return $n * $n;
}

// Input array
$numbers = [1, 2, 3, 4, 5];

// Using the callback
$squaredNumbers = applyCallback($numbers, 'square');

// Output the result
print_r($squaredNumbers);
?>
