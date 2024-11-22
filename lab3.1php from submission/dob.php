<!DOCTYPE html>
<html>
<head>
    <title>Date of Birth Result</title>
</head>
<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $day = isset($_POST['day']) ? htmlspecialchars($_POST['day']) : '';
        $month = isset($_POST['month']) ? htmlspecialchars($_POST['month']) : '';
        $year = isset($_POST['year']) ? htmlspecialchars($_POST['year']) : '';

        if (!empty($day) && !empty($month) && !empty($year)) {
            echo "<h3>Your Date of Birth: $day-$month-$year</h3>";
        } else {
            echo "<h3>Please complete your date of birth!</h3>";
        }
    } else {
        
        header("Location: dob.html");
        
    }
    ?>
</body>
</html>
