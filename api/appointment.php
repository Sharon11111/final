<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Read the incoming data from the request body
    $data = file_get_contents('php://input');

    // Assuming the incoming data is in JSON format
    $jsonData = json_decode($data, true);

    // Process the data as needed
    // For example, you can access specific values using array notation:
    
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $date_of_birth = $_POST["date_of_birth"];
    $identification_number = $_POST["identification_number"];
    $phone_number = $_POST["phone_number"];
    $appointment_date = $_POST["appointment_date"];
    $appointment_time = $_POST["appointment_time"];
    $doctor_name = $_POST["doctor_name"];

    // TODO: Perform any necessary operations with the data





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






