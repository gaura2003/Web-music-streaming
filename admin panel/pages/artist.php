<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add Artist</title>
<link rel="stylesheet" href="../css/add_artist.css">
</head>
<body>

<div class="container">
  <h2>Add Artist</h2>
  <form action="add_artist.php" method="post" enctype="multipart/form-data">
    <label for="name">Artist Name:</label>
    <input type="text" id="name" name="name" required>
    <label for="bio">Bio:</label>
    <textarea id="bio" name="bio" required></textarea>
    <label for="image">Image:</label>
    <input type="file" id="image" name="image" accept="image/*" required>
    <button type="submit">Add Artist</button>
  </form>
</div>

</body>
</html>
