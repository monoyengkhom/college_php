<?php
function is_prime($number) {
    // Check if number is less than 2 (0 and 1 are not prime numbers)
    if ($number < 2) {
        return false;
    }
    
    // Check for factors from 2 to the square root of the number
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    
    return true;
}

// Example usage:
$number = 29;
if (is_prime($number)) {
    echo "$number is a prime number.";
} else {
    echo "$number is not a prime number.";
}
?>
