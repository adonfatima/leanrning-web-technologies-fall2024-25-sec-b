<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: login.php");
    exit();
}

if (isset($_POST['change'])) {
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $retype_password = $_POST['retype_password'];
    
    } else {
        echo "New passwords do not match!";
    }

?>
<!DOCTYPE html>

<head>
   
    <title>Change Password</title>
</head>
<body>
    <h2>Change Password</h2>
    <form action="change_password.php" method="POST">
        <label>Current Password:</label><br>
        <input type="password" name="current_password" required><br>
        
        <label>New Password:</label><br>
        <input type="password" name="new_password" required><br>
        
        <label>Retype New Password:</label><br>
        <input type="password" name="retype_password" required><br>
        
        <button type="submit" name="change">Change</button>
    </form>
    <a href="logout.php">Home</a>
</body>
</html>