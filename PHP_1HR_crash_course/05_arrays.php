<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Crash Course Part 1</title>
    <meta charset="UTF-8" />
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
        <h1>Arrays in PHP</h1>
        <h3>Indexxed arrays</h3>
        <?php
            $fruits = ["Apple", "Banana", "Cherry"];
            echo $fruits[2] . "<br>";
            $fruits[3] = "Peach";
            echo "<pre>";
            var_dump($fruits);
            echo "</pre>";
            echo "<br>";
        ?>
    </div>

    <div>
        <h3>Mixed Arrays</h3>
        <div>
            <?php
                $mixedArray = ["String", 123, true];
                echo "<pre>";
                var_dump($fruits);
                echo "</pre>";
                echo "<br>";
            ?>
        </div>
    </div>

    <div>
        <h3>Associative Arrays</h3>
        <div>
            <?php
                $users = [
                    "001" => [
                        "name" => "Varun",
                        "age" => 24,
                        "email" => "varun@example.com",
                        "hobbies" => ['Coding','Biking']
                    ],
                    "002" => [
                        "name" => "Soma",
                        "age" => 25,
                        "email" => "soma@example.com",
                        "hobbies" => ['MMA','ghoomna']
                    ]
                ];
                echo "User001's name is " . $users['001']['name'] ;
                echo "<br>";
                echo $users['002']['name'] . " likes to " . $users['002']['hobbies'][1];
                echo "<br>";
            ?>
        </div>
    </div>

</body>

</html>
