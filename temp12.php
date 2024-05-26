<?php
$x='This is a boy. This is a ball. That is a bat';
echo($x."\n");
$result = preg_replace('/this/', '/that/', $x , 1);
echo($result."\n");
?>