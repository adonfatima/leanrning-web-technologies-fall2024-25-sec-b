<?php

    session_start();
    unset($_SESSION['abc']);
    session_destroy();

    header('location: logincheck.html');

?>