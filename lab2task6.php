<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $numb=array(10,20,30,40,50);
    $search=10;
    $flag=false;
    for($i=0;$i<count($numb);$i++){
        if($numb[$i]==$search){
            $flag=true;
            break;
        }
    }
    if($flag){
        echo "found" .$i;
    }
    else{
        echo "not found";
    }
    ?>
</body>
</html>