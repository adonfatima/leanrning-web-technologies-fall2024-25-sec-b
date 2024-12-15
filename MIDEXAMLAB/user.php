<?php
session_start();
if (!isset($_SESSION['id']) || $_SESSION['user_type'] !== "User") {
    header("Location: login.php");
    
}
?>

<html lang="en">
<head>
    
    <title>User Page</title>
</head>
<body>
    <h1>Welcome!</h1>
    <p><a href="profile.php">Profile</a></p>
    <p><a href="change_password.php">Change Password</a></p>
    <p><a href="logout.php">Logout</a></p>
</body>
</html>