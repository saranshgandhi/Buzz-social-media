<?php
// Include the database connection file
include_once 'db_connection.php';

// Handle file upload - this part doesn't seem relevant to your form submission, so you may remove it if unnecessary

// Process form submission
if (isset($_POST['submit'])) {
    // Retrieve form data
    $username = $_POST['username'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Insert data into database using prepared statements to prevent SQL injection
    $sql = "INSERT INTO reg (username,name, email, password) VALUES (?,?, ?, ?)";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("ssss", $username,$name, $email, $password);

    if ($stmt->execute()) {
        // Print alert prompt
        echo "<script>alert('Reg. successfully. Redirecting to Login Page')</script>";
        
        echo "<script>window.location.href = 'login.php';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close statement
    $stmt->close();
}

// Close connection
$con->close();
?>
