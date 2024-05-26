<?php

function removeWhitespace($str) {
    return str_replace(' ', '', $str);
}

$string = "Hello, world! This is a string with whitespace.";

echo "Original string: $string\n";
echo "String after removing whitespace: \n" . removeWhitespace($string) . "\n";

?>
