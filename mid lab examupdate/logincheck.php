<?php
    session_start();

    if(isset($_POST['submit'])){
        
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
       
        

        if($username == null || empty($password)){
            echo "Null username/password";
        }else if($username == $password){
           
            $_SESSION['abc'] = true;
            header('location: logincheck.html');
        }else{
            echo "Invalid user!";
        }
    }else{
        header('location: logincheck.html');
    }
?>
