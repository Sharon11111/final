<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Read the incoming data from the request body
    $data = file_get_contents('php://input');

    // Assuming the incoming data is in JSON format
    $jsonData = json_decode($data, true);

    // Process the data as needed
    // For example, you can access specific values using array notation:
    
    $identification_number = $jsonData["identification_number"];
    $body = $jsonData['body'];
    $doctor_id = $jsonData['doctor_id'];

    // TODO: store data to db





    // Prepare the response
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






