<!DOCTYPE html>
<html>
<head>
    <title>Task 4: Gender Result</title>
</head>
<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['gender'])) {
            
            echo "<h3>Your Gender: " . htmlspecialchars($_POST['gender']) . "</h3>";
        } else {
        
            echo "<h3 style='color:red;'>Please select your gender!</h3>";
        }
    } else {
        header("Location: gender1.html");
    
    }
    ?>
</body>
</html>
