<?php
// In a real-world scenario, you would store admin credentials securely in a database.
$adminUsername = "admin";
$adminPassword = "admin123"; // You should hash and salt the password in production.

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    if ($username === $adminUsername && $password === $adminPassword) {
        // Authentication successful
        // You can set a session variable and redirect to the admin panel
        header("Location: admin_panel.php");
    } else {
        // Authentication failed
        echo "Invalid username or password";
    }
}
?>
