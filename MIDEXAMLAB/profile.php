<?php
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: login.php");

}

$id = $_SESSION['id'];
$name = $_SESSION['name'];
$user_type = $_SESSION['user_type'];
?>


<head>
    
    <title>Profile</title>
</head>
<body>
    <h2>Profile</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <td><?php echo $id; ?></td>
        </tr>
        <tr>
            <th>Name</th>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <th>User Type</th>
            <td><?php echo $user_type; ?></td>
        </tr>
    </table>
    <br>
    <a href="admin.php">Go Home</a>
</body>
</html>