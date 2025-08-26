<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Functions</title>
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
        <h1>Functions</h1>
        <?php
            function sayHello(): void
            {
                echo "Hello World <br>";
            }

            function greet($name = 'Guest'): void
            {
                echo "Hello $name <br>";
            }

            function multiply($x, $y): int
            {
                return $x*$y;
            }
        ?>

        <?php
          sayHello();
          greet();
          greet("Soma");
          echo multiply(3,4);
        ?>
    </div>
</body>
</html>
