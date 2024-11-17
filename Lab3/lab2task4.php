<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $numb1 = 10;
    $numb2 = 20;
    $numb3 = 15;

    if ($numb1 >= $numb2 && $numb1 >= $numb3) {
        echo $numb1 . " is the largest number.";
    } elseif ($numb2 >= $numb1 && $numb2 >= $numb3) {
        echo $numb2 . " is the largest number.";
    } else {
        echo $numb3 . " is the largest number.";
    }
    ?>
</body>
</html>
