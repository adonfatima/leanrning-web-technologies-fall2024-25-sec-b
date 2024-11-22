<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['degree']) && is_array($_POST['degree'])) {
        $degrees = $_POST['degree'];
        
       
        if (count($degrees) >= 2) {
            echo "You have selected the following degrees: <br>";
            
        } else {
            echo "Please select at least two degrees.";
        }
    } else {
        echo "Please select your degrees.";
    }
} else {
   
    header('location: degree.html');
    
}
?>
