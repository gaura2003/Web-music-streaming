<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "artist_database";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = $_POST['id'];

  $sql = "DELETE FROM artists WHERE id=$id";

  if ($conn->query($sql) === TRUE) {
    echo "Artist deleted successfully";
  } else {
    echo "Error deleting artist: " . $conn->error;
  }
}

$conn->close();
?>
