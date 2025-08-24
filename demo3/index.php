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
        <?php $books = [
            [
                "name" => "DragonKnight",
                "author" => "BunnyEncoder",
                "purchaseURL" => "https://example.com",
            ],
            [
                "name" => "Harry Potter",
                "author" => "J K Rollin",
                "purchaseURL" => "https://buyHarryPotter.com",
            ],
            [
                "name" => "Game of Thrones",
                "author" => "George RR Martin",
                "purchaseURL" => "https://gameofthrones.com",
            ],
        ]; ?>
        <div>
            <h1>
                Books You can Buy
            </h1>
            <ul>
                <?php foreach ($books as $book): ?>
                    <li>
                        <a href="<?= $book['purchaseURL']; ?>">
                            <?= $book['name']; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>

    </body>

    </html>