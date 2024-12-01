<?php
session_start();
require 'db.connection.php';

if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
    header("Location: login.php");
    exit;
}

// Display admin options or manage data here
echo "Welcome Admin! <br>";
echo "<a href='add_course.php'>Add Course</a> | <a href='view_students.php'>View Students</a>";
?>