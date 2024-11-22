<!DOCTYPE html>
<html>
<head>
    <title>Blood Group Result</title>
</head>
<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['bloodgroup']) && !empty($_POST['bloodgroup'])) {
            
            echo "<h3>Your Blood Group: " . htmlspecialchars($_POST['bloodgroup']) . "</h3>";
        } else {
            echo "<h3 >Please select a blood group!</h3>";
        }
    } else {
        header("Location: bloodgroup1.html");

    }
    ?>
</body>
</html>
