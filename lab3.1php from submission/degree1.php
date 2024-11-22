<!DOCTYPE html>
<html>
<head>
    <title> Degree</title>
</head>
<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        if (isset($_POST['degree']) && count($_POST['degree']) > 0) {
            echo "<h3>Your Degrees:</h3>";
            foreach ($_POST['degree'] as $degree) {
                echo htmlspecialchars($degree) . "<br>";
            }
        } else {
            
            echo "<h3 >Please select at least one degree!</h3>";
        }
    } else {
       
        header("Location: degree1.html");
        exit();
    }
    ?>
</body>
</html>
