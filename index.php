<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>
    <link rel="stylesheet" href="css/styles.css"> <!-- Link to your CSS file -->
</head>
<body>
    <div class="container">
        <h1>Welcome to the Student Management System</h1>
        <p>This system helps manage student records, courses, and grades effectively.</p>
        
        <div class="links">
            <h2>Login / Register</h2>
            <p>
                <a href="login.php">Login</a> | 
                <a href="register.php">Register</a>
            </p>
        </div>

        <div class="info">
            <h2>Features</h2>
            <ul>
                <li>Manage student records</li>
                <li>Track courses and grades</li>
                <li>Admin and user dashboards</li>
                <li>Password reset functionality</li>
                <li>Generate performance reports</li>
            </ul>
        </div>
    </div>
</body>
</html>