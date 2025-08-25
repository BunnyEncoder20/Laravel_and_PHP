<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crash Course Part 1</title>
    <meta charset="UTF-8">
    <title>Demo</title>

    <style>
        body {
            display: grid;
            place-items: center;
            height: 100vh;
            margin: 0;
            font-family: sans-serif;
        }
    </style>
</head>

<body>
    <div>
        <h1>Strings</h1>
        <?php
        $str = "Varun and Soma are besties";
        echo "{$str} <br>";
        echo strtolower($str) . "<br>";
        echo strtoupper($str) . "<br>";
        echo str_replace("besties", "Best Friends Forever", $str) . "<br>";
        echo str_word_count($str) . "<br>"
            ?>
    </div>
</body>

</html>