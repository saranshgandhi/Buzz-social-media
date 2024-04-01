<?php
// Start the session
session_start();

// Include the database connection file
include_once 'db_connection.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query to fetch user from database
    $sql = "SELECT * FROM reg WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($con, $sql);

    // Check if user exists
    if (mysqli_num_rows($result) == 1) {
        // User found, set session variables and redirect to a logged-in page
        $_SESSION['username'] = $username;
        header("Location: main.php");
        exit;
    } else {
        // User not found, display error message
        echo "<script>alert('Invalid username or password.');window.location.href = 'login.php';</script>";

    }
}

// Close database connection
mysqli_close($con);
?>
