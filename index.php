<?php

use Guzzle\Http\Client;
use Guzzle\Http\EntityBody;

include 'vendor/autoload.php';

$file = urldecode($_GET['file']);

$file_identifier = sha1($file);
$to = 'dumps/' . $file_identifier;
if (!file_exists($to)) {
	$client = new Client($file);
	$request = $client->get();
	$response_body = EntityBody::factory(fopen($to, 'w+'));
	$request->setResponseBody($response_body);
	$request->send();
}

header(sprintf("location: %s", $to));
