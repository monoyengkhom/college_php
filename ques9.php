<?php

function sumOfFirstNOddNumbers($n) {
    $sum = 0;
    $count = 0;
    $number = 1; 
    
    while ($count < $n) {
        $sum += $number; 
        $number += 2; 
        $count++; 
    }
    
    return $sum;
}

// Test case
$n = 5;
echo "Sum of the first $n odd numbers: " . sumOfFirstNOddNumbers($n) . "\n";

?>
