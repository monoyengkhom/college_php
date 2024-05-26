<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci Series</title>
</head>
<body>
    <h1>Fibonacci Series using Recursion</h1>
    <?php
    function fibonacci($n) {
        if ($n <= 1) {
            return $n;
        }
        return fibonacci($n - 1) + fibonacci($n - 2);
    }

    $numTerms = 10;

    echo "<p>The first $numTerms terms of the Fibonacci series are:</p>";
    echo "<p>";

    for ($i = 0; $i < $numTerms; $i++) {
        echo fibonacci($i) . " ";
    }

    echo "</p>";
    ?>
</body>
</html>
