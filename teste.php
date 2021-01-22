<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();

$response = $client->get('http://httpbin.org/get');
$body = $response->getBody();

echo $body;
