<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <style>
        /* Style the navbar */
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 200px; /* Set the width of the navbar */
            height: 100%;
            background-color: #333;
            color: #fff;
            padding: 20px;
        }

        /* Style the navbar links */
        .navbar a {
            display: block;
            margin: 10px 0;
            text-decoration: none;
            color: #fff;
        }

        /* Style the content area */
        .content {
            margin-left: 220px; /* Adjust for the width of the navbar */
            padding: 20px;
        }
        .enlarge {
            font-size: xx-large;
        }
    </style>
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

        // Redirect to the index.php page when the logout link is clicked
        window.location.href = "index.php";
    });
});
</script>

</body>
</html>