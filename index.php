<?php

if (!is_dir('dumps/')) {
	mkdir('dumps/');
}

$file = base64_decode($_GET['file']);

$file_identifier = sha1($file);

echo 'loading: ' . $file . "\n";
if (!file_exists('dumps/' . $file_identifier)) {
	echo 'storing: ' . $file . "\n";
	$content = file_get_contents($file);
	file_put_contents('dumps/' . $file_identifier , $content);
}

echo file_get_contents('dumps/' . $file_identifier);

