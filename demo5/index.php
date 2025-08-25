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
                "name" => "The Pragmatic Programmer",
                "author" => "Andrew Hunt, David Thomas",
                "purchaseURL" => "https://pragprog.com/titles/tpp20/the-pragmatic-programmer-20th-anniversary-edition/",
                "publish_year" => "1999",
            ],
            [
                "name" => "Clean Code",
                "author" => "Robert C. Martin",
                "purchaseURL" => "https://www.informit.com/store/clean-code-a-handbook-of-agile-software-craftsmanship-9780132350884",
                "publish_year" => "2008",
            ],
            [
                "name" => "Design Patterns: Elements of Reusable Object-Oriented Software",
                "author" => "Erich Gamma, Richard Helm, Ralph Johnson, John Vlissides",
                "purchaseURL" => "https://www.oreilly.com/library/view/design-patterns-elements/0201633612/",
                "publish_year" => "1994",
            ],
            [
                "name" => "Refactoring",
                "author" => "Martin Fowler",
                "purchaseURL" => "https://martinfowler.com/books/refactoring.html",
                "publish_year" => "1999",
            ],
            [
                "name" => "You Don’t Know JS Yet",
                "author" => "Kyle Simpson",
                "purchaseURL" => "https://github.com/getify/You-Dont-Know-JS",
                "publish_year" => "2015",
            ],
            [
                "name" => "Introduction to Algorithms",
                "author" => "Thomas H. Cormen, Charles E. Leiserson, Ronald L. Rivest, Clifford Stein",
                "purchaseURL" => "https://mitpress.mit.edu/9780262046305/introduction-to-algorithms/",
                "publish_year" => "1990",
            ],
        ]; ?>
        <div>
            <h1>
                Books You can Buy
            </h1>
            <ul>
                <?php foreach ($books as $book): ?>
                    <?php if ($book['author'] === 'Andrew Hunt, David Thomas'): ?>
                        <li>
                            <a href="<?= $book['purchaseURL']; ?>">
                                <?= $book['name']; ?> (<?= $book['publish_year'] ?>)
                            </a>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
        </div>

    </body>

    </html>