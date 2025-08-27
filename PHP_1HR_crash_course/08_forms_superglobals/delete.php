<?php
    if (isset($_GET['name'])) {
        $contactsFile = 'contacts.json';
        $contacts = file_exists($contactsFile) ?
        json_decode(file_get_contents($contactsFile), true) : [] ;

        // remove the contact from contacts array
        $contacts = array_filter($contacts, fn($con) => $con['name'] != $_GET['name']);

        // write the data back
        file_put_contents($contactsFile, json_encode($contacts, JSON_PRETTY_PRINT));

        echo $_GET['name'] . " contact was deleted.<br>";
    } else {
        echo $_GET['name']." is not set !";
    }
?>
