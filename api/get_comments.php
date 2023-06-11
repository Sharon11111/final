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
    // $doctor_name = $jsonData['doctor_name'];
    $doctor_name = 'name';

    // SQL
    $sql = "SELECT * FROM $table_comments 
            WHERE doctor_name = '$doctor_name'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $rows = array();
        while($r = mysqli_fetch_assoc($result)) {
            $rows[] = $r;
        }
        $response = [
            'status' => 'success',
            'comments' => $rows
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






