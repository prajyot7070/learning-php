<?php

require_once __DIR__ . "/../vendor/autoload.php";
header("Content-Type: application/json");

$method = $_SERVER['REQUEST_METHOD'];
$route = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($route === '/echos') {
    require_once __DIR__ . "/routes/echos.php"; // this is like include from C
    die();
}

// basic stuff
if ($method === 'GET' && $route === '/') {
    echo json_encode(['message' => 'Welcome to my world through GET']);
}

if ($method === 'POST' && $route === '/') {
    echo json_encode(['message' => 'Welcome to my world through POST']);
}

if ($method === 'PUT' && $route === '/') {
    echo json_encode(['message' => 'Welcome to my world through PUT']);
}

if ($method === 'DELETE' && $route === '/') {
    echo json_encode(['message' => 'You are not Welcome to my world through DELETE']);
}
