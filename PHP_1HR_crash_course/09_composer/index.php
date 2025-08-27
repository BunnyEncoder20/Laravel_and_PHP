<?php
    // registers all the 3rd party packages
    require 'vendor/autoload.php';

    // GuzzleHttp package allows use to send req to APIs
    use GuzzleHttp\Client;
    $client = new Client();
    $response = $client->request('GET', 'https://meowfacts.herokuapp.com/?count=3');
    $body = $response->getBody();
    $responseData = json_decode($body);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <h1>3 Cat Fact</h1>
    <ul>
        <?php foreach ($responseData->data as $fact): ?>
        <li>
            <?php
                echo "<pre>";
                echo "Did you know?<br>";
                echo $fact . "<br>";
                echo "</pre>";
            ?>
        </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
