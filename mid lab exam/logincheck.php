<?php
    session_start();

    if(isset($_POST['submit'])){
        //echo "Test";
        //print_r($_GET)
        //$username = $_GET['username'];
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        //$username = $_REQUEST['username'];

        //echo "Your username is: ". $username;
        //echo "Your username is: {$username}";

        if($username == null || empty($password)){
            echo "Null username/password";
        }else if($username == $password){
            //echo "valid user!";

            $_SESSION['abc'] = true;
            header('location: logincheck.html');
        }else{
            echo "Invalid user!";
        }
    }else{
        header('location: logincheck.html');
    }
?>
