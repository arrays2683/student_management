<?php
session_start();
require 'db.connection.php';

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'student') {
    header("Location: login.php");
    exit;
}

// Display student-specific information here
echo "Welcome Student! <br>";
echo "<a href='view_grades.php'>View Grades</a>";
?>