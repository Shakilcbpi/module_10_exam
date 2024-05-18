<?php

// Array of strings
$strings = ["Hello", "World", "PHP", "Programming"];

//$strings=implode($strings);
// Function to count vowels in a string
function countVowels($string) {
    $vowelCount = preg_match_all('/[aeiouAEIOU]/', $string);
    return $vowelCount;
}


foreach ($strings as $string) {
    // Count the number of vowels 
    $vowelCount = countVowels($string);
    
    // Reverse 
    $reversedString = strrev($string);
    
    // Print the original string, vowel count, and reversed string
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString".'<br>';
}

echo countVowels($strings);
   
