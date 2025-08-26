<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Loops</title>
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
        <h1>Loops</h1>
        <div>
            <h2>For loops</h2>
            <?php
                for ($i = 0; $i<5; $i++) {
                    echo "ran $i times <br>";
                }
            ?>
        </div>
        <div>
            <h2>While loop</h2>
            <?php
                $i = 1;
                while ($i < 5) {
                    echo "ran $i times <br>";
                    $i++;
                }
            ?>
        </div>
        <div>
            <h2>Foreach loop</h2>
            <?php
                $names = ['Varun','Soma','Bunnu','Hoods'];
                foreach ($names as $name) {
                    echo "Hello $name <br>";
                }
            ?>
        </div>
    </div>
</body>
</html>
