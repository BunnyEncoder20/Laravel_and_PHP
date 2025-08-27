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
