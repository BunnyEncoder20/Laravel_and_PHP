<!DOCTYPE html>
<html>

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
        <h1>Numbers</h1>
        <?php
        $x = 25;
        $y = 2;
        $z = $x + $y;
        echo $x + $y . "<br>";
        echo "{$z}<br>";
        echo $x - $y . "<br>";
        echo "<br>";
        ?>
    </div>
</body>

</html>