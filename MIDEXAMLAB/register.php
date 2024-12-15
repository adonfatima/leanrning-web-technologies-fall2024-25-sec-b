
<?php
if (isset($_POST['register'])) {
    $id = $_POST['id'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $name = $_POST['name'];
    $user_type = $_POST['user_type'];

    if ($password === $confirm_password) {
        $data = $id . "," . $password . "," . $name . "," . $user_type . "\n";
        echo "Registration successful. <a href='login.php'>Login here</a>";
    } else {
        echo "Passwords do not match!";
    }
}
?>