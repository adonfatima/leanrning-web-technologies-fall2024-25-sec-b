<?php
    session_start();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['gender']) && !empty($_POST['gender'])) {
            $gender = $_POST['gender'];
            echo "Your gender is: {$gender}";
            echo "You selected: " . htmlspecialchars($gender);
        } else {
            echo "Please select your gender.";
        }
    } else {
        header('Location: gender.html');
       
    }
?>
