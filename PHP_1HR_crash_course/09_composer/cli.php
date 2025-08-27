<?php
    // registers all the 3rd party packages
    require 'vendor/autoload.php';

    // GuzzleHttp package allows use to send req to APIs
    use GuzzleHttp\Client;
    use Varunverma\Testing\MyClass; // custom class file

    $client = new Client();
    $response = $client->request('GET', 'https://meowfacts.herokuapp.com/?count=3');
    $body = $response->getBody();
    $responseData = json_decode($body);

    foreach ($responseData->data as $fact) {
        echo $fact;
    }

    $instance = new MyClass();
    $instance->run();
?>
