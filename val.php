<?php
$nameErr = $emailErr = "";
$name = $email = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["send"])) {
    $name = test_input($_POST["subject"]);
    if (empty($name)) {
        $nameErr = "Name is required";
    } elseif (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
        $nameErr = "Only letters and white space allowed";
    }

    $email = test_input($_POST["email"]);
    if (empty($email)) {
        $emailErr = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
    }

    $message = test_input($_POST["message"]);

    if (empty($nameErr) && empty($emailErr)) {
        // Redirect to the PHPMailer file
        header("Location: mal.php?name=" . urlencode($name) . "&email=" . urlencode($email) . "&message=" . urlencode($message));
        exit();
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
