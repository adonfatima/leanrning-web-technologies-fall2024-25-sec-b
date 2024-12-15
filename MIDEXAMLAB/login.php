<?php
session_start();

if (isset($_POST['login'])) {
    $id = $_POST['id'];
    $password = $_POST['password'];
    $users = $id;

            if ($user_type === "Admin") {
                header("Location: admin.php");
            } else {
                header("Location: user.php");
            }
            exit();
        }
    
    echo "Valid!";

?>
