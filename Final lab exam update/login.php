<?php
session_start(); 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $host = 'localhost';
    $dbname = 'user_management';
    $db_user = 'root';
    $db_pass = '';
    $conn = new mysqli($host, $db_user, $db_pass, $dbname);


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';


    $errors = [];
    if (empty($username)) {
        $errors[] = "Username is required.";
    }
    if (empty($password)) {
        $errors[] = "Password is required.";
    }

    
    if (empty($errors)) {
        
        $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
        $stmt->bind_param('s', $username);
        $stmt->execute();
        $result = $stmt->get_result();

        
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            
            if (password_verify($password, $user['password'])) {
            
                $_SESSION['username'] = $user['username'];
                $_SESSION['success'] = "Welcome, " . htmlspecialchars($user['name']) . "!";
                
                
                header('Location: dashboard.php');
                exit;
            } else {
                
                $_SESSION['error'] = "Invalid password.";
            }
        } else {
            
            $_SESSION['error'] = "User not found.";
        }

        $stmt->close(); 
    } else {
        
        $_SESSION['error'] = implode("<br>", $errors);
    }

    $conn->close(); 
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php
    
    if (isset($_SESSION['error'])) {
        echo '<p style="color:red;">' . $_SESSION['error'] . '</p>';
        unset($_SESSION['error']); 
    }
    ?>
    <form action="login.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username"><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br><br>
        
        <button type="submit">Login</button>
    </form>
</body>
</html>
