<?php
require 'db.connection.php';

// Example report to get average grades
$sql = "SELECT u.username, AVG(g.grade) as average_grade 
        FROM users u
        LEFT JOIN grades g ON u.id = g.user_id
        GROUP BY u.id";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$reports = $stmt->fetchAll();

foreach ($reports as $report) {
    echo "Student: " . $report['username'] . " - Average Grade: " . number_format($report['average_grade'], 2) . "<br>";
}
?>