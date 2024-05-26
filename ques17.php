<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Language Selector</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        select {
            font-size: 16px;
            padding: 5px;
        }
        #message {
            margin-top: 20px;
            font-size: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Select a Language</h1>
    <form method="POST" action="">
        <select name="language" id="languageSelector">
            <option value="en">English</option>
            <option value="es">Spanish</option>
            <option value="fr">French</option>
            <option value="de">German</option>
            <option value="it">Italian</option>
        </select>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $language = $_POST['language'];
        $message = '';

        switch ($language) {
            case 'en':
                $message = 'Hello';
                break;
            case 'es':
                $message = 'Hola';
                break;
            case 'fr':
                $message = 'Bonjour';
                break;
            case 'de':
                $message = 'Hallo';
                break;
            case 'it':
                $message = 'Ciao';
                break;
            default:
                $message = 'Hello';
        }

        echo '<div id="message">' . htmlspecialchars($message) . '</div>';
    }
    ?>
</body>
</html>
