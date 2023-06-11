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
    $identification_number = $jsonData["identification_number"];
    // $identification_number = "A123";

    // SQL
    $sql = "SELECT * FROM $table_appointments 
            WHERE identification_number = '$identification_number'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $rows = array();
        while($r = mysqli_fetch_assoc($result)) {
            $rows[] = $r;
        }
        $response = [
            'status' => 'success',
            'appointments' => $rows
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






