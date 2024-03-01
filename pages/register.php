<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="../css/registeration.css">
</head>
<body>
    <div class="container">
        <h2>Register</h2>
        <form action="home.php" method="post">
            <input type="text" name="name" placeholder="Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="tel" name="phone" placeholder="Phone Number" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="text" name="serial_number" placeholder="Serial Number" required>
            <input type="hidden" name="reg_date" value="<?php echo date('Y-m-d H:i:s'); ?>">
            <button type="submit">Register</button>
        </form>
    </div>
</body>
</html>

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
    $Id = $_POST['serial_number'];
    $reg_date = $_POST['reg_date'];
    
    // Insert user into database
               
$sql = "INSERT INTO `Registration`(`name`, `email`, `phone`, `password`, `reg_date`) VALUES ('$name','$email','$phone','password','$reg_date')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
