<?php
    $pdo = require "db.php";

    if (isset($_GET['name'])) {
        $contact_name = $_GET['name'];

        // STEP1: Remove image from server (not necessarily needed each time)
        // prepare stmt: get image path from user name
        $stmt = $pdo->prepare("SELECT image FROM contacts WHERE name = :name");
        // exec and bind variable
        $stmt->execute([":name"=>$contact_name]);
        // fetch the result
        $contact = $stmt->fetch(PDO::FETCH_ASSOC);

        // If there is an image, delete fom
        if ($contact && $contact['image']) {
            $imagePath = $contact['image'];
            if (file_exists($imagePath)) {
                unlink($imagePath); // unlink = delete from file system
            }
        } else {
            echo "image file not found" . $contact['image'];
        }

        #STEP2: Remove the contact info
        $stmt = $pdo->prepare("DELETE FROM contacts WHERE name = :name");
        $stmt->execute([":name"=>$contact_name]);

        echo $_GET['name'] . " contact was deleted.<br>";
    } else {
        echo $_GET['name']." is not set !";
    }
?>
