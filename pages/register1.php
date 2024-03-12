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

// Process registration form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash password for security
    $confirm_password = $_POST['confirm_password'];
    $reg_date = $_POST['reg_date'];

    // Check if email already exists
    $check_email_sql = "SELECT * FROM `Registration` WHERE email='$email'";
    $email_result = $conn->query($check_email_sql);

    if ($email_result->num_rows > 0) {
        echo "<h1>Email already exists. Please use a different email.</h1>";
    } else {
        // Insert user into the database
        $sql = "INSERT INTO `Registration`(`name`, `email`, `phone`, `password`, `reg_date`) VALUES ('$name','$email','$phone','$password','$reg_date')";

        if ($conn->query($sql) === TRUE) {
            echo "Registration successful";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}

// Close connection
$conn->close();
?>
