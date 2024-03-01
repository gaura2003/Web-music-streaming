

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

// SQL query to create a table

$sql = "CREATE TABLE usersdata (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

// Execute SQL query
if ($conn->query($sql) === TRUE) {
    echo "Table 'usersdata' created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// Close connection
$conn->close();
?>

