<! doctype html>
    <html lang="en">

    <head>
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
        <!-- php -->
        <?php
        $book = "DragonKnight";
        $isRead = false;
        if ($isRead) {
            $msg = "I've read the $book";
        } else {
            $msg = "I've not read the $book";
        }
        ?>
        <h1>
            <?php echo $msg; ?>
            <?= $msg ?>
        </h1>

    </body>

    </html>