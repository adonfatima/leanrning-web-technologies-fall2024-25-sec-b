<?php
    session_start();

    if(isset($_POST['submit'])){
        $bloodgroup=$_POST['bloodGroup'];
        echo $bloodgroup;
        if($bloodgroup==""){
            echo "Enter your blood group";
        }
    } 
    else{
        header('location: blood.html');
    }
?>