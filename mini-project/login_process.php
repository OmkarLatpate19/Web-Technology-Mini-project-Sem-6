<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if username and password are set and not empty
    if (isset($_POST["username"]) && isset($_POST["password"]) && !empty($_POST["username"]) && !empty($_POST["password"])) {
        // Here you would typically verify the username and password against a database
        // For simplicity, let's assume the correct credentials are "admin" and "password"
        $username = $_POST["username"];
        $password = $_POST["password"];
        if ($username === "admin" && $password === "password") {
            // Authentication successful, set session variables
            $_SESSION["loggedin"] = true;
            $_SESSION["username"] = $username;
            // Redirect to the main page
            header("location: index.php");
            exit;
        } else {
            // Authentication failed, redirect back to login page with error message
            header("location: login.php?error=invalid_credentials");
            exit;
        }
    } else {
        // Username or password not provided, redirect back to login page with error message
        header("location: login.php?error=empty_fields");
        exit;
    }
} else {
    // Redirect to login page if accessed directly without submitting the form
    header("location: login.php");
    exit;
}
?>
