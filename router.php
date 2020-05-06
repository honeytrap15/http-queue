<?php

$method = $_SERVER['REQUEST_METHOD'];
$filename = '/files' . $_SERVER['REQUEST_URI'];

switch($method) {
default:
    $resp = '{"message": "unsupported method"}';
    break;
case 'POST':
    $resp = file_get_contents('php://input');
    file_put_contents($filename, $resp);
    break;
case 'GET':
    $resp = file_get_contents($filename);
    break;
}

echo $resp;
