<?php

include (realpath(dirname(__FILE__)."/init/connect_db.php"));

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Read the incoming data from the request body
    $data = file_get_contents('php://input');
    // Assuming the incoming data is in JSON format
    $jsonData = json_decode($data, true);
    // Process the data as needed
    // For example, you can access specific values using array notation:
    $first_name = $jsonData["first_name"];
    $last_name = $jsonData["last_name"];
    $date_of_birth = $jsonData["date_of_birth"];
    $identification_number = $jsonData["identification_number"];
    $phone_number = $jsonData["phone_number"];
    $appointment_date = $jsonData["appointment_date"];
    $appointment_time = $jsonData["appointment_time"];
    $doctor_name = $jsonData["doctor_name"];

    // $first_name ="nnnn";
    // $last_name ="temp";
    // $identification_number ="A123";
    // $date_of_birth ="temp";
    // $phone_number ="temp";
    // $appointment_date ="temp02";
    // $appointment_time ="temp";
    // $doctor_name ="temp";

    // TODO: Perform any necessary operations with the data

    // SQL query to insert a new row
    $sql = "INSERT INTO $table_appointments (
        first_name, 
        last_name, 
        identification_number, 
        date_of_birth,
        phone_number,
        appointment_date,
        appointment_time,
        doctor_name
    ) 
    VALUES (
        '$first_name',
        '$last_name',
        '$identification_number',
        '$date_of_birth',
        '$phone_number',
        '$appointment_date',
        '$appointment_time', 
        '$doctor_name'
    )
    ON DUPLICATE KEY UPDATE    
        first_name='$first_name', 
        last_name='$last_name',
        identification_number='$identification_number',
        date_of_birth='$date_of_birth',
        phone_number='$phone_number',
        appointment_date='$appointment_date',
        appointment_time='$appointment_time',
        doctor_name='$doctor_name'
    ";
    $result = mysqli_query($conn, $sql);

    // check account already exists
    // $error_duplicate_account = false;
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






