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

// Retrieve data from database
$sql = "SELECT * FROM artists";
$result = $conn->query($sql);

$data = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Artists</title>
<style>
  .artists-container {
    display: flex;
    overflow-x: auto;
    white-space: nowrap;
    background-color: black;
    text-align:center;
  }
  .artist {
    display: inline-block;
    margin-right: 20px;
    background-color: white;
    width:150px;
    padding: 20px;
    margin: 10px;
  }
  .artist img {
  width:100px;
  height:100px;
    max-width: 100px;
    cursor: pointer;
  }
  h3{
      padding: 0px;
      margin: 0px;
  }
</style>
</head>
<body>

<div class="artists-container">
  <?php foreach($data as $artist): ?>
  <div class="artist">
      <img src="<?php echo $artist['image']; ?>" onclick="zoomImage(this)" alt="<?php echo $artist['name']; ?>">
  
    <h3><a href="artist_details.php?id=<?php echo $artist['id']; ?>"><?php echo $artist['name']; ?></a></h3>
    
    <p class="bio" style="display: none;"><?php echo $artist['bio']; ?></p>
  
    
  </div>
  <?php endforeach; ?>
</div>

<script>
function zoomImage(img) {
  window.open(img.src, "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=500,left=500,width=400,height=400");
}

function showBio(button) {
  var bioElement = button.parentNode.nextElementSibling;
  if (bioElement.style.display === "none") {
    bioElement.style.display = "block";
    button.textContent = "Hide Bio";
  } else {
    bioElement.style.display = "none";
    button.textContent = "See Bio";
  }
}
</script>

</body>
</html>
