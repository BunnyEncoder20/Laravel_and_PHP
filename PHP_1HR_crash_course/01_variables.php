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
        <h1>
            Variables and Their Types
        </h1>
        <?php
        $name = 'Zura';
        $age = 32;
        $isFather = true;
        $money = 19.99;
        $salary = null;
        ?>

        <h2>Printing Variables Types</h2>
        <?php
        echo $name . " " . gettype($name) . " " . "<br>";
        echo $age . " " . gettype($age) . " " . "<br>";
        echo $isFather . " " . gettype($isFather) . " " . "<br>";
        echo $money . " " . gettype($money) . " " . "<br>";
        echo $salary . " " . gettype($salary) . " " . "<br>";
        echo "<br><br><br>"
            ?>

        <!-- Printing the whole vairables -->
        <h2>Printing Varaibles values and info</h2>
        <?php
        print_r($name);  // same as echo
        echo "<br>";
        var_dump($name); // gives a little more info
        echo "<br>";
        var_dump($age);
        echo "<br>";
        var_dump($isFather);
        echo "<br>";
        var_dump($money);
        echo "<br>";
        var_dump($salary);
        echo "<br>";
        ?>

        <!-- Variables checking functions  -->
        <h2>Type checking</h2>
        <?php
        var_dump(is_string($name));
        echo "<br>";
        var_dump(is_string($age));
        echo "<br>";
        var_dump(isset($salary));   // checks if variables is DEFINED
        echo "<br>";
        var_dump(isset($country));  // Salary is defined (not assigned a value) and country is not 
        ?>
    </div>
</body>

</html>