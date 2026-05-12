<?php

$method = $_SERVER['REQUEST_METHOD'];

switch ($method) {
    case 'GET':
        echo json_encode([
            "status" => "success",
            "message" => "Fetching all echos"
        ]);
        break;

    case 'POST':
        $json = file_get_contents('php://input');
        $body = json_decode($json, true);

        echo json_encode([
            "status" => "success",
            "message" => "Echoing your input",
            "data" => $body
        ]);
        break;

    default:
        http_response_code(405);
        echo json_encode([
            "error" => "Method $method not allowed on /echos"
        ]);
        break;
}
