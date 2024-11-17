<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $amount=100;
    $vat=0.15;
    $vat_amount=$amount*$vat;
    $total=$amount+$vat_amount;
    echo $vat_amount."<br>";
    echo  $total ;
    ?>

</body>
</html>