<?php
$con = mysqli_connect('localhost', 'root', '', 'miniproject_data');

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"]; // Add email field

    // Perform SQL query to insert data into user table
    $sql = "INSERT INTO user (username, password, email) VALUES ('$username', '$password', '$email')";

    if (mysqli_query($con, $sql)) {
        echo "Registration successful!";
        // Redirect to login page or wherever you want
        // header("Location: login.php"); // Uncomment this line if you want to redirect
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
}

mysqli_close($con);
?>
