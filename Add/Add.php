<!DOCTYPE html>
<html>

<head>
  <title>Add Bike</title>
  <link rel="stylesheet" type="text/css" href="Add.css">
</head>

<body>
  <header>
    <div class="logo">
      <img src="../Image/logo.png" alt="Logo">
      <h1>Bike Shop</h1>
    </div>
  </header>

  <div class="container">
    <h2>Add New Bike</h2>
    <form action="Addconnect.php" enctype="multipart/form-data" method="POST">
      <div class="form-group">
        <label for="name">ID:</label>
        <input type="number" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="image">Image:</label>
        <input type="file" id="image" name="image" accept="image/*" required>
      </div>

      <div class="form-group">
        <label for="image">Image:</label>
        <input type="file" id="image_2" name="image_2" accept="image/*" required>
      </div>

      <div class="form-group">
        <label for="price">Name:</label>
        <input type="text" id="price" name="price" required>
      </div>
      <div class="form-group">
        <label for="color">Description:</label>
        <input type="text" id="color" name="color" required>
      </div>


      
      


      <div class="form-group">
        <input type="submit" value="Add Bike">
      </div>
    </form>
  </div>

  <footer>
    <p>&copy; 2023 Bike Shop. All rights reserved.</p>
    <div class="footer-login">
      <a href="#">Admin Login</a>
      <a href="#">Customer Login</a>
    </div>
  </footer>

</body>

</html>
