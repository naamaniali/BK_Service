<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $color = $_POST['color'];
    
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
    $imageDestination = 'img/Birthday/' . $imageName;

    $imageNams = $_FILES['image_2']['name'];
    $imageTmpNames = $_FILES['image_2']['tmp_name'];
    $imageDestinations = 'img/banner/' . $imageNams;

    // Move the uploaded image to the "uploads" directory
    if (move_uploaded_file($imageTmpName, $imageDestination)) {
        // Insert data into the database
        $sql = "INSERT INTO team (id, img_1,img_2, name_1,name_2) VALUES ('$name', '$imageDestination','$imageDestinations', '$price', '$color')";

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
