<!DOCTYPE html>
<html>
<head>
    <title>Email </title>
</head>
<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';

        if (!empty($email)) {
            echo "<h3>Your Email: $email</h3>";
        } else {
            echo "<h3>Please enter your email!</h3>";
        }
    } else {
        
        header("Location: email1.html");
        
    }
    ?>
</body>
</html>
