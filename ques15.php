<?php
 function evenNum($n){
    for($i=2;$i<=$n;$i+=2){
        echo "$i ";
    }
 } 
 $n = 20;
 evenNum($n);
?>