<?php

function isLowerCase($str) {
    return ctype_lower($str);
}

$string1 = readline("Enter a string: ");


if (isLowerCase($string1)) {
    echo "$string1 is lowercase.\n";
} else {
    echo "$string1 is not lowercase.\n";
}

?>
