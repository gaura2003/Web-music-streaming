<?php

// Connect to MySQL database
$servername = "localhost";
$username = "root";
$password = "";


$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else{
    echo "connection successful ";
}

//create a database

$sql = "CREATE DATABASE users1";
$result = mysqli_query($conn, $sql);

echo " Database is created ";
echo var_dump($result) ;
  

?>
