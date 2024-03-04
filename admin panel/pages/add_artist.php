<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "artist_database";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Process form data
$name = $_POST['name'];
$bio = $_POST['bio'];
$image_name = $_FILES['image']['name'];
$image_temp = $_FILES['image']['tmp_name'];
$image_path = "uploads/" . $image_name;

// Move uploaded image to a folder
move_uploaded_file($image_temp, $image_path);

// Insert data into database
$sql = "INSERT INTO `artists` (name, bio, image) VALUES ('$name', '$bio', '$image_path')";

if ($conn->query($sql) === TRUE) {
  echo "New artist added successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
