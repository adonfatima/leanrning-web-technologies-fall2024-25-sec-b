<?php
    session_start();
    $emailEmpty="";
    if(isset($_POST['submit'])){
        $email = $_REQUEST['email'];
        if($email == null ){
            echo "Email is empty";
            $emailEmpty = "Email is empty";
        }
        elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format";
        }else{
            echo"<br>";
            echo "valid user!";
        }
       
    }else{
        header('location: email.html');
    }
?>