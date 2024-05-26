<?php
$color = array('white', 'green', 'red');

// Display the colors in a comma-separated format
echo implode(', ', $color) . ",<br>";

// Display the colors with bullets, each on a new line
foreach ($color as $c) {
    echo "• " . $c . "<br>";
}
?>
