<?php
require 'db.connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    if ($user) {
        // Generate reset token and send email (simplified)
        echo "Password reset link sent to your email.";
    } else {
        echo "No user found with that email.";
    }
}
?>

<form method="post" action="">
    Email: <input type="email" name="email" required><br>
    <input type="submit" value="Reset Password">
</form>