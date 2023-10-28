<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="navbar">
    <p class="enlarge">Admin</p>
    <a href="#">Users</a>
    <a href="#">Graphs</a>
    <a href="#" id="logoutButton">Log out</a> <!-- Add an id to the logout link -->
</div>

<!-- Content goes here -->
<div class="content">
    <!-- Your page content goes here -->
    <h1>Welcome to the Admin Dashboard</h1>
    <p>This is where you can manage users, view graphs, and log out.</p>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Get a reference to the logout link
    const logoutButton = document.getElementById('logoutButton');

    // Add a click event listener to the logout link
    logoutButton.addEventListener('click', function(event) {
        event.preventDefault();

        // Show a confirmation dialog before redirecting
        const confirmLogout = window.confirm("Are you sure you want to log out?");
        if (confirmLogout) {
            // Redirect to the index.php page when the user confirms
            window.location.href = "index.php";
        }
    });
});
</script>

</body>
</html>
