<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$database = "users";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query  to insert data into table

$sql ="INSERT INTO  `usersdata`(`id`, `username`, `email` ,`reg_date`) VALUES ('2', 'Guru roy', 'guru2@gmail.com', CURRENT_TIMESTAMP)";


// Execute SQL query
if ($conn->query($sql) === TRUE) {
    echo "Data in 'usersdata' inserted successfully";
} else {
    echo "Error On inserting data : " . $conn->error;
}

// Close connection
$conn->close();
?>

