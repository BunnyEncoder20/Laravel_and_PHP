<?php
    $pdo = require 'db.php';
    $upload_dir = 'uploads/';

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

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forms Super Globals</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="name">Name:</label>
        <input type="text" name="name">
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email">
        <br>
        <label for="phone">Phone:</label>
        <input type="tel" name="phone">
        <br>
        <label for="Photo">Phone:</label>
        <input type="file" name="image" accept="image/*">
        <br>
        <button type="submit">Send Data</button>
    </form>
</body>
</html>
