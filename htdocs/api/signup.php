<?php

include (realpath(dirname(__FILE__)."/init/connect_db.php"));

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Read the incoming data from the request body, using JSON format
    $data = file_get_contents('php://input');
    $jsonData = json_decode($data, true);

    // Process the data as needed
    // For example, you can access specific values using array notation:
    $first_name = $jsonData["first_name"];
    $last_name = $jsonData["last_name"];
    $identification_number = $jsonData["identification_number"];
    $password = $jsonData['password'];

    // $first_name = "王";
    // $last_name = "嗨嗨c9 c9 c9 ";
    // $identification_number = "A123";
    // $password = "dddd";

    // SQL query to insert a new row
    $sql = "INSERT INTO $table_users (
        first_name, 
        last_name, 
        identification_number, 
        password
    ) 
    VALUES (
        '$first_name',
        '$last_name',
        '$identification_number',
        '$password'
    )
    ON DUPLICATE KEY UPDATE    
        first_name='$first_name', 
        last_name='$last_name',
        identification_number='$identification_number',
        password='$password'
    ";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $response = [
            'status' => 'success',
        ];
    } else {
        $errorMessage = mysqli_error($conn);
        $response = [
            'status' => 'fail',
            'message' => $errorMessage
        ];
    }

    // Send the response back to the client
    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    // Return an error for unsupported request methods
    header('HTTP/1.1 405 Method Not Allowed');
    echo 'This endpoint only supports POST requests';
}




