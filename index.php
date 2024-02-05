<?php
require 'vendor/autoload.php';
use GuzzleHttp\Client;

$client = new Client([
    // Base URI is used with relative requests
    'base_uri' => 'https://pokeapi.co/api/v2/',
    // You can set any number of default request options.
    'timeout'  => 2.0,
]);

$response = $client->request('GET', 'pokemon/ditto');
$pokemon = json_decode($response->getBody()->getContents());

echo "<pre>";
var_dump($_SERVER);
echo "</pre>";