<?php
function bubbleSort($array) {
    $n = count($array); // number of elements

    // Outer loop for passes
    for ($i = 0; $i < $n - 1; $i++) {
        // Inner loop for comparing adjacent elements
        for ($j = 0; $j < $n - $i - 1; $j++) {
            // Swap if the current element is greater than the next element

            if ($array[$j] > $array[$j + 1]) {
                $temp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $temp;
            }
        }
    }
    return $array; // Return the sorted array
}

// Test the bubbleSort function
$numbers = [64, 34, 25, 12, 22, 11, 90];
echo "Original array: " . implode(", ", $numbers) . "\n";

$sortedArray = bubbleSort($numbers);
echo "Sorted array: " . implode(", ", $sortedArray) . "\n";
?>
