<?php
session_start();

// In a real application, validate the username and password from a database
$valid_admin_username = "admin";
$valid_admin_password = "admin123";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === $valid_admin_username && $password === $valid_admin_password) {
        $_SESSION["admin_logged_in"] = true;
        header("Location: admin_dashboard.php");
        exit();
    } else {
        echo "Invalid username or password. Please try again.";
    }
}
?>
