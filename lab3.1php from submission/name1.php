<!DOCTYPE html>
<html>
<head>
    <title>Name </title>
</head>
<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';

        if (!empty($name)) {
            echo "<h3>Your Name: $name</h3>";
        } else {
            echo "<h3 >Please enter your name!</h3>";
        }
    } else {
        
        header("Location: name1.html");
        
    }
    ?>
</body>
</html>
