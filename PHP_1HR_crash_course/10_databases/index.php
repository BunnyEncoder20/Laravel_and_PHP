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

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contacts</title>
</head>
<body>
    <div>
        <h1><a href="create.php">Create a Contact</a></h1>
    </div>
    <div>
        <ul>
            <?php foreach ($contacts as $contact): ?>
                <li>
                    <img src="<?= $contact['image']; ?>" alt="alt text" />
                    <?php echo "{$contact['name']} - {$contact['email']} - {$contact['phone']}"; ?>
                    <br>
                    <a href="delete.php?name=<?= urlencode($contact['name']) ?>">
                        Delete Contact
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>
</html>
