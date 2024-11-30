<?php

function lengthOfLongestSubstring($str) {
    $n = strlen($str);
    $charSet = [];
    $maxLength = 0;
    $left = 0;

    for ($right = 0; $right < $n; $right++) {
        $currentChar = $str[$right];
        
        // If character is already in the current substring, move the left pointer
        while (in_array($currentChar, $charSet)) {
            array_shift($charSet); // Remove the leftmost character
            $left++;
        }

        // Add the current character to the set and update maxLength
        $charSet[] = $currentChar;
        $maxLength = max($maxLength, $right - $left + 1);
    }

    return $maxLength;
}

// Input
$input = trim(fgets(STDIN));

// Output
echo lengthOfLongestSubstring($input);

?>
