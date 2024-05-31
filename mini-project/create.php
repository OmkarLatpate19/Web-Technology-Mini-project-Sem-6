<?php

// Establish connection
$con = mysqli_connect('localhost', 'root', '', 'miniproject_data');

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Prepare and bind SQL statement
$query = "INSERT INTO forts (name, description) VALUES (?, ?)";
$stmt = mysqli_prepare($con, $query);

// Bind parameters
mysqli_stmt_bind_param($stmt, "ss", $fort_name, $description);

// Get form data
$fort_name = $_POST['fort_name'];
$description = $_POST['description'];

// Execute the statement
if (mysqli_stmt_execute($stmt)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . mysqli_error($con);
}

// Close statement and connection
mysqli_stmt_close($stmt);
mysqli_close($con);

// Redirect to index.php
header('location:index.php');
?>
