<?php
// Connect to MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$database = "form";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
    echo "connection successful ";
}


?>