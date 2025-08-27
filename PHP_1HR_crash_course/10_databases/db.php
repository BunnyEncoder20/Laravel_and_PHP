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
