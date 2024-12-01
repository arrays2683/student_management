<?php
require 'db.connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Assume token validation is done
    $new_password = password_hash($_POST['new_password'], PASSWORD_BCRYPT);
    // Update password in the database
    echo "Your password has been reset!";
}
?>

<form method="post" action="">
    New Password: <input type="password" name="new_password" required><br>
    <input type="submit" value="Reset Password">
</form>