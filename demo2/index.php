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
        <?php $items = ["item 1", "item 2", "item 3"]; ?>

        <h3>The First Method</h3>
        <ul>
            <?php foreach ($items as $item) {
                echo "<li>$item</li>";
            } ?>
        </ul>

        <h3>The Second Method</h3>
        <ul>
            <?php foreach ($items as $item): ?>
                <li><?php echo $item; ?></li>
            <?php endforeach; ?>
        </ul>

    </body>

    </html>
