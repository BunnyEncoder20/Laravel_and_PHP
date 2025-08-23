# Laravel_and_PHP

- an repo I have made to learn PHP and Laravel framework

## Basics
- Variables
```php
<?php
    $variable = "value";

    $gretting = "Hellow";
    $person = "Soma";
    echo "$gretting $person"; // note that this only works for ""
    echo '$gretting $person'; // output: $gretting $person
?>
```
- Printing strings
```php
<?php echo "Hello World"; ?>
<?php echo "Hello" . "World"; ?> // the . is the concatenation opperator in php

```
- Conditionals
```php
<?php
$book = "DragonKnight";
$isRead = false;
if ($isRead) {
    $msg = "I've read the $book";
} else {
    $msg = "I've not read the $book";
}
?>
```
- Arrays:
```php
<?php $books = [
    "DragonKnight",
    "Game of Thrones",
    "Love Death and Robots",
]; ?>
<h1>
    <?php echo "Books"; ?>
</h1>
<ul>
    <?= $books[1]; ?>   // 0 based indexing, output: Game of Thrones
</ul>
```
- Loops:
```php
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
```

---

## Important Commands
- Running your built-in PHP developmental server:
```bash
php -S <addr>:<port>
php -S localhost:8888
```
