# Laravel_and_PHP

- an repo I have made to learn PHP and Laravel framework

## Basics (Crash Course 1)

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
    var_dump(isset($salary));   // returns TRUE if variable id declared and NOT NULL
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
    } elseif ($age < 19) {
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

### Functions
- Simple functions:
```php
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
  sayHello();           // simple function
  greet();              // param function
  greet("Soma");        // default params
  echo multiply(3,4);   // returning function
?>
```

## Form Super Globals

- SuperGlobal variables hold all the informations related to your page and website
- Whenever we want to get GET, POST data from the html, we use super globals (syntax: $_SUPERGLOBAL).
- Eg: $_SERVER, $_FILES
```php
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        $phone = filter_input(INPUT_POST, "phone", FILTER_SANITIZE_NUMBER_INT);

        if ($name && $email && $phone) {
            echo "Contact details added: $name: $phone ($email)";
        } else {
            echo "Invalid input";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forms Super Globals</title>
</head>
<body>
    <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name">
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email">
        <br>
        <label for="phone">Phone:</label>
        <input type="tel" name="phone">
        <br>
        <button type="submit">Send Data</button>
    </form>
</body>
</html>
```
- Notice that we need to need to sanitize the inputs. These are necessary to prevent hacking.
- IF the inputs do not sanitary, then the variables are assigned NULL

## File & Dir Handling
- We can access the file data by making the form encypt type as a **mulitpart form** and using the **$_FILES** super global
- The **$_FILES** would look something like this:
```bash
<?php
    echo "<pre>";
    var_dump($_FILES);
    echo "</pre>";
?>
// Output:
array(1) {
  ["image"]=>
  array(6) {
    ["name"]=>
    string(30) "pexels-daniel-43199-217872.jpg"
    ["full_path"]=>
    string(30) "pexels-daniel-43199-217872.jpg"
    ["type"]=>
    string(10) "image/jpeg"
    ["tmp_name"]=>
    string(79) "/private/var/folders/6l/6cz1m8ld13z9chh7hjbbncdw0000gn/T/php9f9qpfdb770hcb78EA1"
    ["error"]=>
    int(0)
    ["size"]=>
    int(1237915)
  }
}
```
- Using the information given in the **$FILES** superglobal, we can handle the files storage into more permanent place (local_dir or database)
```php
<?php
    $upload_dir = 'uploads/';
    $contactsFile = 'contacts.json';

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
        $phone = filter_input(INPUT_POST, "phone", FILTER_SANITIZE_NUMBER_INT);

        if ($name && $email && $phone && isset($_FILES['image'])) {
            // ensure dir exists
            if (!is_dir($upload_dir)) {
                mkdir($upload_dir, 0777, true); // 0777 = create with full permissions
            }
            $imageName = time() . "_" . basename($_FILES['image']['name']);
            $imagePath = $upload_dir . $imageName;

            // move uploaded_file: func to move the uploaded files to new (permanent) location
            if (move_uploaded_file($_FILES['image']['tmp_name'], $imagePath)) {
                // file_get_content reads the files content
                // json_decode converts it into a array
                // file_put_content writes contacts to file
                // json_encode converts array into json

                $contacts = file_exists($contactsFile) ?
                            json_decode(file_get_contents($contactsFile), true)
                            : [];
                $contacts[] = [
                    'name' => $name,
                    'email' => $email,
                    'phone' => $phone,
                    'image' => $imagePath
                ];
                file_put_contents($contactsFile, json_encode($contacts, JSON_PRETTY_PRINT));
            }

            echo "Contact details added: $name: $phone ($email)";
        } else {
            echo "Invalid input<br>";
            echo "$name<br>";
            echo "$email<br>";
            echo "$phone<br>";
            echo "<pre>";
            var_dump($_FILES);
            echo "</pre>";
        }
    }
?>
```
- Reading from a file:
```php
<?php
  $contactsFile = 'contacts.json';
  $contacts = file_exists($contactsFile) ? json_decode(file_get_contents($contactsFile), true) : [];
?>
```
- Writing to a file:
```php
<?php
  $contactsFile = 'contacts.json';
  $contacts = file_exists($contactsFile) ? json_decode(file_get_contents($contactsFile), true) : [];
  file_put_contents($contactsFile, json_encode($contacts, JSON_PRETTY_PRINT));
?>
```
- Deleting a file:
```php
<?php
    foreach ($contacts as $key => $con) {
        if ($con['name'] === $nameToDelete) {
            // Delete the image file if it exists
            if (!empty($con['image']) && file_exists($con['image'])) {
                unlink($con['image']);   // deletes the file
            }
            unset($contacts[$key]); // remove the contact
        }
    }
?>
```

## Composer
- Composer is a tool for dependency management (package manager) in PHP. It allows you to declare the libraries your project depends on and it will manage (install/update) them for you.
- Like npm for javascript or uv,pip for python.

## Req & Res using GuzzleHttp
```php
<?php
    // registers all the 3rd party packages
    require 'vendor/autoload.php';

    // GuzzleHttp package allows use to send req to APIs
    use GuzzleHttp\Client;
    $client = new Client();
    $response = $client->request('GET', 'https://meowfacts.herokuapp.com/?count=3');
    $body = $response->getBody();
    $responseData = json_decode($body);

    foreach ($responseData as $fact) {
      echo $fact . "<br>";
    }
?>
```
- **NOTE:** there are 2 ways to access the incoming data:
    1. _Convert it into a php array_ (json_decode($res, true); the second true param of json_decode will convert the incoming json into a array)
    2. _Stick to the object oriented_, done like above example, using "->". Remember for this the data must be a object from stdClass

## Organizing Classes withing the src dir
- src dir is where all of the classes of our project will be.
- Remember to declare the namespace properly (the default/base one is always there in your compose.json at root dir)
- If the file is in src dir, namespace would be:
```php
<?php
    namespace Varunverma\Testing;
    class MyClass
    {
        function run(): void
        {
            echo "Hellow from MyClass Instance";
        }
    }
?>
```
if the file was inside another dir, lets say 'Models' then namespace would change as follows:
```php
<?php
    namespace Varunverma\Testing\Models;
    class MyClass
    {
        function run(): void
        {
            echo "Hellow from MyClass Instance";
        }
    }
?>

```

## Databases
- **"pdo"** is the standard way to connecting to databases in php
- The below is an example of how to init a "pdo" instance and return it (usually in the 'db.php file).
- CREATE
```php
<?php
    try {
        $pdo = new PDO('sqlite:contacts.db'); //sqlite file
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Error handling
        $pdo->exec("
            CREATE TABLE IF NOT EXISTS contacts (
                id INTEGER PRIMARY KEY,
                name TEXT NOT NULL,
                email TEXT NOT NULL,
                phone TEXT,
                image TEXT
            );
        "); // exec sql command
        return $pdo; // return instance
    } catch (PDOException $e) {
        echo $e;
        return null;
    }
?>
```
- READ
```php
<?php
  $pdo = require 'db.php';  // fetches the pdo instance
  $contacts = [];

  if ($pdo) {
      // querying the db
      $stmt = $pdo->query("
        SELECT * FROM contacts;
      ");

      // fetch all contacts as associative arrays
      $contacts = $stmt->fetchAll(PDO::FETCH_ASSOC) ;
  }
?>
```
- UPDATE / INSERT
```php
<?php
    $pdo = require 'db.php';

    // we first make the statement/query for db
    $stmt = $pdo->prepare("
        INSERT INTO contacts (name, email, phone, image)
        VALUES (:name, :email, :phone, :image)
    "); // is : are on purpose

    // then execute it, filling in the vars
    $stmt->execute([
        ':name' => $name,
        ':email' => $email,
        ':phone' => $phone,
        ':image' => $imagePath
    ]);
?>
```
- DELETE
```php
<?php
    $stmt = $pdo->prepare("DELETE FROM contacts WHERE name = :name");
    $stmt->execute([":name"=>$contact_name]);
?>
```

## Including files in php
We can include files in 2 main ways:
1. using `include`
```php
<?php include 'Header.php' ?>
<?php include 'Footer.php' ?>
```
2. using `require`
```php
<?php require 'Header.php' ?>
<?php require 'Footer.php' ?>
```
**NOTE:** if a required file is not there, php will throw  a error and stop execution. However when an include file is not there, it will only throw a warning.
---

## Bro Code (Crash Course 2)
- Thought would do one more crash course to make sure I cover all of the basics. Plus bro code's teaching is pretty great.

### Important Math func:
```php
<?php
    abs();
    round(x); // rounds x to nearest int
    round(x, 2); // rounds x to nearest float with 2 decimal places
    floor();
    ceil();
    pow(); // **
    sqrt();
    max();
    min();
    pi();
    rand(min, max);
?>
```

### Important Array func
```php
<?php
    array_push(arr, value1, value2);// pushes one or more values
    array_pop(arr);                 // removes last element
    rev_arr = array_reverse(arr);   // returns the reversed array
    num_elements = count(arr);      // counts the num of elements in array
?>

// Associative Arrays
<?php
    $dict_arr = array(
    "key1" => "Value1",
    "key2" => "Value2",
    "key3" => "Value3",
    );

    // Foreach variations for dicts/obj: Both key and values
    foreach($dict_arr as $key => $val) {
        echo "{$key} -> {$val} <br>";
    }
    // only keys
    foreach(array_keys($dict_arr) => $key) {
        echo "{$key} <br>";
    }
    // only values
    foreach(array_values($dict_arr) => $val) {
        echo "{$val} <br>";
    }

    $flipped_arr = array_flip($dict_arr); // returns a new arr in which keys become values and values become keys
?>
```

### Important String funcs
```php
<?php
    strlen($string);
    strtolower($string);
    strtoupper($string);
    strrev($string);        // reverse
    strcmp($str1, $str2);   // compares 2 strings
    strpos($string, $char); // returns the position of first occurance of $char
    substr($string, $startIdx, $endIdx) // substring
    trim($string);
    explode($delimiter, $string); // returns array with string seperated by delimiter
    implode($delimiter, $string); // retuns a single string join with delimiter in between

    str_pad($string, $len, $char);  // pads string from behind for $len spaces with $char
    str_replace($this_char, $with_this_char, $string);  // replace chars of strings
    str_shuffle($string)  // shuffle the chars of the string
?>
```

### Important form funcs
```php
<?php
    isset(); // returns TRUE(1) if varible is declared and NOT NULL
    empty(); // returns TRUE(1) if variable is not declared, false, null
?>
```

---

## Cookies in PHP
- cookies are set using the setcookie func, which takes
    - key
    - value
    - expirations date (eg: time() + (86400 * 2))
    - file path
- the cookies stores key value pairs.
- These are accessible using the $_COOKIE superglobal.
```php
<?php
    setcookie($key, $value, $expirations, $file_path);
    foreach($_COOKIE as $key => $val) {
        echo "{$key} -> {$val} <br>" ;
    }
?>
```

## Session in PHP

- $_SESSION is a super global used to stroe infoon a user to be used across multiple pages. A user is assigned an session-id (ex login cred / token)
- They $_SESSION like $_COOKIE stores key -> value pairs.
- On which every page we would like the session to be, we will have to put the session start code (before the html).
```php
<!--Page 1-->
<?php
    session_start(); // starts a session
    $_SESSION['username'] = 'name';
    $_SESSION['password'] = 'super_secret_pass';
    header("Location: home_page.php") // to navigate to other page
?>
```
- On the next page if we want the user info from session, we will do:
```php
<!--Home Page-->
<?php
    session_start();
    echo $_SESSION['username'];
    echo $_SESSION['password'];
?>
```
- To end a session, we call the session_destroy()
```php
<?php
    session_destroy();
    header("Location: index.php");
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
- Initialize composer project
```bash
composer init
```
- Installing packages
```bash
composer require guzzlehttp/guzzle
```
