<?php
 function palindrome($str){
    $lower = strtolower($str);
    $rev = strrev($lower);
    if($lower == $rev){
        echo "It is a palindrome.\n";
    }
    else{
        echo "It is not palindrome. \n";
    }
 }

 $string = readline("Enter a string: ");
 palindrome($string);
?>