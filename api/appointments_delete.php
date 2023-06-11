<?php

include (realpath(dirname(__FILE__)."/init/connect_db.php"));

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Read the incoming data from the request body
    $data = file_get_contents('php://input');

    // Assuming the incoming data is in JSON format
    $jsonData = json_decode($data, true);

    // Process the data as needed
    // For example, you can access specific values using array notation:
    // $identification_number = $jsonData["identification_number"];
    $identification_number = "A123";
    $appointment_date = "temp02";
    $appointment_time = "temp";

    // SQL
    $sql = "DELETE FROM $table_appointments 
    WHERE identification_number = '$identification_number'
    AND appointment_date = '$appointment_date'
    AND appointment_time = '$appointment_time'
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






