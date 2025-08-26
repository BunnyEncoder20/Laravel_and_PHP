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

### Numbers & Arthematics

- Can have a look at all the Numbers docs [here] (https://www.php.net/manual/en/book.math.php) there are a lot.
- Common arithematics remain the same as other languages:
  - add: +
  - increment: ++
  - subs: -
  - decrement: --
  - multiply: \*
  - divide: /
  - remainder: %
  - power: \*\*
  - sqrt: square root
- There are also the min and max funcs:
  - min(values...) - returns min of variables or array of variables
  - max(values...) - same but max value

### Conditionals

#### if-else + comparision operators

- assignment: =
- check equal: ==
- check equal: ===
- not equal: != or <>
- not double equal: !==
- less than, greater than:<,<=,>, >=

```php
<?php
    $age = 22;
    $watched = true;

    if ($age < 13) {
        echo "You are a child";
    } else if ($age < 19) {
        echo "You are a teeanger";
    } else {
        echo "You are a adult";
    }
?>
```

#### Logical Operators

- and: &&
- or: ||
- not: !

```php
<?php
if ($age > 18 and !$haveDrivingLisence) {
    echo "You can ride a bike";
}
?>
```

#### Switch

- The do old switch block. Same as always

```php
<?php
    $day = 7;
    switch ($day) {
        case 1:
            echo "Monday";
            break;
        case 2:
            echo "Tuesday";
            break;
        case 3:
            echo "Wednesday";
            break;
        case 4:
            echo "Thrusday";
            break;
        case 5:
            echo "Friday";
            break;
        case 6:
            echo "Saturday";
            break;
        case 7:
            echo "Sunday";
            break;
        default:
            echo "Invalid day number";
    }
?>
```

### Arrays

#### Indexed Arrays
```php
<?php
    $fruits = ["Apple", "Banana", "Cherry"];
    echo $fruits[2] . "<br>";

    $fruits[3] = "Peach";
    echo "<pre>";       // tag to make the array look nice
    var_dump($fruits);
    echo "</pre>";
?>
```
#### Mixed Arrays
- just like arrays of python, php arrays are mixed by default.
```php
<?php
    $mixedArray = ["String", 123, true];
    echo "<pre>";
    var_dump($fruits);
    echo "</pre>";
    echo "<br>";
?>
```

#### Associative Arrays (Dicts basically)
- Are arrays only but are used as a substitue for dictionaries. Don't think they have the same benefits though, only resembles the structure.
```php
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
```

### Loops
- There are the classic types:
    - For loop
    ```php
        <?php
            for ($i = 0; $i<5; $i++) {
                echo "ran $i times <br>";
            }
        ?>
    ```
    - while loop
    ```php
    <?php
        $i = 1;
        while ($i < 5) {
            echo "ran $i times <br>";
        }
    ?>
    ```
    - foreach loop (suitalble for iterables like arrays)
    ```php
    <?php
        $names = ['Varun','Soma','Bunnu','Hoods'];
        foreach ($names as $name) {
            echo "Hello $name <br>";
        }
    ?>
    ```


## Important Commands

- Running your built-in PHP developmental server:

```bash
php -S <addr>:<port>
php -S localhost:8888
php -S localhost:8888 <filename>.php
```
