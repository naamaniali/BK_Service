<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    
    // Database connection details
    $host = 'localhost';
    $db = 'bk_services';
    $user = 'root';
    $pass = '';

    // Connect to the database
    $con = new mysqli($host, $user, $pass, $db);

    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    // Handle the image file
    $imageName = $_FILES['image']['name'];
    $imageTmpName = $_FILES['image']['tmp_name'];
    $imageDestination = 'img/icons/' . $imageName;


    // Move the uploaded image to the "uploads" directory
    if (move_uploaded_file($imageTmpName, $imageDestination)) {
        // Insert data into the database
        $sql = "INSERT INTO services_home (id, name, image, description) VALUES ('$id','$name', '$imageDestination', '$price')";

        if ($con->query($sql) === TRUE) {
            echo "Record inserted successfully.";
            
        } else {
            echo "Error: " . $sql . "<br>" . $con->error;
        }
    } else {
        echo "Failed to move the uploaded image.";
    }

    $con->close();
}
?>
