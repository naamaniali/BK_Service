<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $color = $_POST['color'];
    $value = $_POST['value'];
    $mission = $_POST['mission'];
    $Section = $_POST['Section'];
    
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


    // Move the uploaded image to the "uploads" directory
    if (move_uploaded_file($imageTmpName, $imageDestination)) {
        // Insert data into the database
        $sql = "INSERT INTO birthday (id, name, img, description, tdescription, Client, want_client, section) VALUES ('$id','$name', '$imageDestination', '$price','$color','$value','$mission','$Section')";

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
