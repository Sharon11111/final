<?php

include (realpath(dirname(__FILE__)."/init/connect_db.php"));

// if ($_SERVER['REQUEST_METHOD'] === 'GET') {
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Read the incoming data from the request body
    $data = file_get_contents('php://input');

    // Assuming the incoming data is in JSON format
    $jsonData = json_decode($data, true);

    // Process the data as needed
    // For example, you can access specific values using array notation:
    $identification_number = $jsonData['identification_number'];
    $password = $jsonData['password'];

    // $identification_number = "A123";
    // $password = "dddd";
    
    $sql = "SELECT * FROM $table_users 
            WHERE identification_number = '$identification_number'
            AND password = '$password'
            ";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $response = [
            'status' => 'success',
            'first_name' => $row['first_name'],
            'last_name' => $row['last_name'],
            'identification_number' => $row['identification_number'],
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






