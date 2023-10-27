document.addEventListener('DOMContentLoaded', function() {
    const loginForm = document.getElementById('loginForm');

    loginForm.addEventListener('submit', function(event) {
        event.preventDefault();
        const username = document.getElementById('username').value;
        const password = document.getElementById('password').value;

        // You can add client-side validation here, e.g., checking for empty fields or format

        // Send the form data to the server for authentication
        authenticateAdmin(username, password);
    });

    function authenticateAdmin(username, password) {
        // In a real-world application, you would perform server-side authentication.
        // For this example, let's assume the admin credentials are correct.
        // You can replace this with actual server-side validation.
        const adminCredentialsCorrect = true;

        if (adminCredentialsCorrect) {
            // Redirect to the admin dashboard page upon successful login
            window.location.href = "admin_dashboard.php";
        } else {
            // Authentication failed
            alert("Invalid username or password");
        }
    }
});
