<?php

function stringContains($mainString, $subString) {
    // Check if the substring exists within the main string
    if (strpos($mainString, $subString) !== false) {
        return true; // Substring found
    } else {
        return false; // Substring not found
    }
}

// Test cases
$mainString1 = "Hello, world!";
$subString1 = "world";

if (stringContains($mainString1, $subString1)) {
    echo "'$mainString1' contains '$subString1'\n";
} else {
    echo "'$mainString1' does not contain '$subString1'\n";
}

?>
