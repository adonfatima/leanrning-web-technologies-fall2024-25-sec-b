<?php
session_start();
if (!isset($_SESSION['id']) || $_SESSION['user_type'] !== "Admin") {
    header("Location: login.php");
   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Admin Page</title>
</head>
<body>
    <h1>Welcome Bob!</h1>
    <p><a href="profile.php">Profile</a></p>
    <p><a href="change_password.php">Change Password</a></p>
    <p><a href="view_users.php">View Users</a></p>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>