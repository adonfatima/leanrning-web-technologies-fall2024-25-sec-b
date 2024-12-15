<?php
session_start();
if (!isset($_SESSION['id']) || $_SESSION['user_type'] !== "Admin") {
    header("Location: login.php");
    
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>View Users</title>
</head>
<body>
    <h2>Users</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>User Type</th>
        </tr>
        <?php
        foreach ($users as $id) {
           
            echo "<tr>
                    <td>$id</td>
                    <td>$name</td>
                    <td>$user_type</td>
                  </tr>";
        }
        ?>
    </table>
    <br>
    <a href="admin.php">Go Home</a>
</body>
</html>