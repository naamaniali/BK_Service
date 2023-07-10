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

    <form action="Birthdayconnect.php" enctype="multipart/form-data" method="POST">

      <div class="form-group">
        <label for="name">ID:</label>
        <input type="number" id="id" name="id" required>
      </div>

      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
      </div>

      

      <div class="form-group">
        <label for="image">Icon:</label>
        <input type="file" id="image" name="image" accept="image/*" required>
      </div>

      <div class="form-group">
        <label for="price">Description:</label>
        <input type="text" id="price" name="price" required>
      </div>

      <div class="form-group">
        <label for="price">Second Description:</label>
        <input type="text" id="color" name="color" required>
      </div>

      <div class="form-group">
        <label for="price">Value:</label>
        <input type="text" id="value" name="value" required>
      </div>

      <div class="form-group">
        <label for="price">mission:</label>
        <input type="text" id="mission" name="mission" required>
      </div>

      <div class="form-group">
        <label for="price">Section:</label>
        <input type="text" id="Section" name="Section" required>
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
