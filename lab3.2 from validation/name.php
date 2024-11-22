<?php
    session_start();
    if(isset($_POST['submit'])){
        
        $username = $_REQUEST['username'];

      
        //echo "Your username is: {$username}";

        if($username == null){
            echo "Null username";
        }elseif (str_word_count($username) < 2) { // Check if the username contains less than 2 words
            echo "Please enter at least two words.";
        }
        elseif(!(($username[0]>='a'&& $username[0]<='z') || ($username[0]>='A'&& $username[0]<='Z'))) {
            echo "First letter is not a alphabet";
        }else{
            echo"<br>";
            echo "valid user!";
        }
    }else{
        header('location: name.html');
    }
?>