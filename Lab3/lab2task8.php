<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $array=array(
        array(1,2,3),
        array(4,5,7),
        array(7,8,9)
    );
    for($i=0;$i<3;$i++){
        for($j=0;$j<3;$j++){
            echo $array[$i][$j]." ";
        }
        echo "<br>";
    }
    ?>

</body>
</html>