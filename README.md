# Laravel_and_PHP

- an repo I have made to learn PHP and Laravel framework

## Basics

### Variables & Data Types

- Variables and there types:

  - string
  - integer
  - boolean
  - float or double
  - null
  - array
  - Object (advanced)
  - Resource (advanced)

```php
<?php
    $name = 'Zura';
    $age = 32;
    $isFather = true;
    $money = 19.99;
    $salary = null;

    echo $name . " " . gettype($name) . " " . "<br>";
    echo $age . " " . gettype($age) . " " . "<br>";
    echo $isFather . " " . gettype($isFather) . " " . "<br>";
    echo $money . " " . gettype($money) . " " . "<br>";
    echo $salary . " " . gettype($salary) . " " . "<br>";
    echo "<br><br><br>"
?>
```

- Printing debug / info of variables, use var_dump()

```php
<h2>Printing Varaibles values and info</h2>
<?php
    print_r($name);  // also an option, same as echo
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
```

- Variable checking functions

```php
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
```

### Strings

- There are a lot of string functioins of php. Check out the docs [here](https://www.php.net/manual/en/ref.strings.php).
- Some commonly used ones :

```php
<?php
    $str = "Varun and Soma are besties";
    echo "{$str} <br>";
    echo strtolower($str) . "<br>";
    echo strtoupper($str) . "<br>";
    echo str_replace("besties", "Best Friends Forever", $str) . "<br>";
    echo str_word_count($str) . "<br>"
?>
```

---

## Important Commands

- Running your built-in PHP developmental server:

```bash
php -S <addr>:<port>
php -S localhost:8888
php -S localhost:8888 <filename>.php
```
