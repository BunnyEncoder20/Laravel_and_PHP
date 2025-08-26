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
        <h1> Conditoinals </h1>
        <div>
            <h2>if - else</h2>
            <?php
            $age = 22;
            $watched = true;

            if ($age < 13) {
                echo "You are a child";
            } else if ($age < 19) {
                echo "You are a teeanger";
            } else {
                echo "You are a adult";
            }
            ?>
        </div>
        <div>
            <h3>Switch</h3>
            <?php
            $day = 7;
            switch ($day) {
                case 1:
                    echo "Monday";
                    break;
                case 2:
                    echo "Tuesday";
                    break;
                case 3:
                    echo "Wednesday";
                    break;
                case 4:
                    echo "Thrusday";
                    break;
                case 5:
                    echo "Friday";
                    break;
                case 6:
                    echo "Saturday";
                    break;
                case 7:
                    echo "Sunday";
                    break;
                default:
                    echo "Invalid day number";
            }
            ?>
        </div>
    </div>
</body>

</html>