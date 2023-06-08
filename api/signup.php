<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Read the incoming data from the request body
    $data = file_get_contents('php://input');

    // Assuming the incoming data is in JSON format
    $jsonData = json_decode($data, true);

    // Process the data as needed
    // For example, you can access specific values using array notation:
    $first_name = $jsonData["first_name"];
    $last_name = $jsonData["last_name"];
    $identification_number = $jsonData["identification_number"];
    $password = $jsonData['password'];

    // TODO: store data to db

    // check account already exists
    $error_duplicate_account = false;

    $response = [
        'status' => 'success',
    ];


    // Send the response back to the client
    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    // Return an error for unsupported request methods
    header('HTTP/1.1 405 Method Not Allowed');
    echo 'This endpoint only supports POST requests';
}






