<?php

require __DIR__ . '/app/autoload.php';

use Main\EntryPoint;

$uri = $_SERVER['REQUEST_URI'] ?? ( $argv[1] ?? '' );
$method = $_SERVER['REQUEST_METHOD'] ?? ( $argv[2] ?? 'GET' );

header("Access-Control-Allow-Origin: '*'");

if ($uri === '/') {
    $uri = '/app/menu';
}

$posUri = strpos($uri, '/resources');
if ($posUri === false || $posUri !== 0 ) {
    EntryPoint::dispatch($method, $uri);
    exit;
}

$resourcePath = __DIR__ . $uri;
readfile($resourcePath);

