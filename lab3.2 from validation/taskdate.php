<?php
    session_start();

    if(isset($_POST['submit'])){
        $birthday = $_REQUEST['Birthday'];
        echo $birthday;
        if(is_null1($birthday)) {
            echo "Birthday is empty";
        }
    }else{
        header('location: date of birth.html');
    }

?>