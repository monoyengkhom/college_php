<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Replace First Occurrence</title>
</head>
<body>
    <h1>Replace the first 'the' with 'That'</h1>
    <?php
    // Original string
    $string = "the quick brown fox jumps over the lazy dog";

    // Regular expression to match the first occurrence of 'the'
    // The \b ensures 'the' is matched as a whole word
    $pattern = '/\bthe\b/i';

    // Replacement string
    $replacement = 'That';

    // Use preg_replace to replace the first occurrence
    $result = preg_replace($pattern, $replacement, $string, 1);

    // Display the result
    echo "<p>Original string: $string</p>";
    echo "<p>Modified string: $result</p>";
    ?>
</body>
</html>
