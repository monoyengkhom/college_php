<!DOCTYPE html>
<html>
<head>
    <title>String Reversal</title>
</head>
<body>

<h2>String Reversal</h2>

<form method="post" action="">
    <label for="input_string">Enter a string:</label><br>
    <input type="text" id="input_string" name="input_string"><br><br>
    <input type="submit" value="Reverse">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the input string from the form
    $input_string = $_POST["input_string"];

    // Reverse the string
    $reversed_string = strrev($input_string);

    // Display the reversed string
    echo "<p>Original String: $input_string</p>";
    echo "<p>Reversed String: $reversed_string</p>";
}
?>

</body>
</html>
