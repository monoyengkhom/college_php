<?php
 function isEmailValid($email){
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
 }
 $emails = [
    "yengkhommonojit@gmail.com",
    "yengkhommonojitgmail.com"
 ];

 foreach($emails as $email){
    if(isEmailValid($email)){
        echo "$email is a valid email address.\n";
    }
    else{
        echo "$email is not a valid email address.\n";
    }
 }
?>