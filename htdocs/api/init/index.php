


<?php

include (realpath(dirname(__FILE__)."/config.php"));

// Create a connection
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Drop the database
$sql = "DROP DATABASE $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Database dropped successfully<br>\n";
} else {
    echo "Error dropping database: " . $conn->error. "<br>\n";
}
// Create a new database
$sql = "CREATE DATABASE $dbname";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully: dbname == $dbname<br>\n";
} else {
    echo "Error creating database: " . $conn->error . "<br>\n";
}

// connect to $dbname
include './connect_db.php';

// Drop the existing table (if it exists)
$sqlDrop = "DROP TABLE IF EXISTS $table_users,$table_appointments,$table_comments";
if ($conn->query($sqlDrop) === TRUE) {
    echo "Table dropped successfully<br>\n";
} else {
    echo "Error dropping table: " . $conn->error . "<br>\n";
}

// CREATE TABLE $table_users
$sql = "CREATE TABLE $table_users (
    identification_number VARCHAR(255) PRIMARY KEY,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    password VARCHAR(255)
)";
if ($conn->query($sql) === TRUE) {
    echo "Table created successfully: TABLE_NAME == $table_users<br>\n";
} else {
    echo "Error creating table: " . $conn->error. "<br>\n";
}
// CREATE TABLE $table_appointments
$sql = "CREATE TABLE $table_appointments (
    identification_number VARCHAR(255),
    appointment_date VARCHAR(255),
    appointment_time VARCHAR(255),
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    date_of_birth VARCHAR(255),
    phone_number VARCHAR(255),
    doctor_name VARCHAR(255),
    PRIMARY KEY (first_name, last_name, appointment_date, appointment_time)
)";
if ($conn->query($sql) === TRUE) {
    echo "Table created successfully: TABLE_NAME == $table_appointments<br>\n";
} else {
    echo "Error creating table: " . $conn->error. "<br>\n";
}
// CREATE TABLE $table_comments
$sql = "CREATE TABLE $table_comments (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    identification_number VARCHAR(255),
    doctor_name VARCHAR(255),
    body VARCHAR(2000),
    created_at VARCHAR(255),
    FOREIGN KEY (identification_number) REFERENCES $table_users(identification_number)
)";
if ($conn->query($sql) === TRUE) {
    echo "Table created successfully: TABLE_NAME == $table_comments<br>\n";
} else {
    echo "Error creating table: " . $conn->error. "<br>\n";
}


// Close the connection
$conn->close();
?>
