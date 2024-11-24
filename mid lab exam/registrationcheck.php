<?php
    session_start();
    if(!isset($_SESSION['abc'])){
        header('location: logincheck.html');
    }
?>

<html>
<head>
    <title>HOME Page</title>
</head>
<body>
        <h1>Welcome Home!</h1>
        <a href='logout.php' > logout </a>
</body>
</html>