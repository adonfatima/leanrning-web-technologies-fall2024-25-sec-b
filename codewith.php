<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php learning </title>
</head>
<body>
    <div class="container">
        This is my first php web
        <?php
        $variable1=5;
        $variable2=2;
        echo $variable1;
        echo $variable2;

        echo $variable1+ $variable2;

        //operators in php
        
        echo "the val";
        echo"<br>";
        echo $variable1+$variable2;
        echo "<br>";
        echo "the val";
        echo"<br>";
        echo $variable1-$variable2;
        echo "<br>";
        echo "the val";
        echo"<br>";
        echo $variable1*$variable2;
        echo "<br>";
        echo "the val";
        echo"<br>";
        echo $variable1/$variable2;
        echo "<br>";
        //Assignment operators 
        $new=$variable1;
        $new+=1;
        echo $new;
        echo"<br>";
        //comparision operators
    
        echo var_dump(1==4);
        echo"<br>";
        echo var_dump(1!=4);
        echo var_dump(1>=4);
        echo var_dump(1<=4);
        echo"<br>";
        //Increment Operators
       echo $variable1++;
        echo $variable1--;
        echo ++$variable1;
       echo --$variable1;
        //Logical operators
        //and(&&) or(||) xor  !
        $myvar=(true) and (true);
        echo var_dump($myvar); 
        //data  types
        echo "Data types <br>";
        $var ="This is a string ";
        echo var_dump($var);
        echo "<br>";

        $var=67;
        echo var_dump($var);
        ?>
        <?php
        echo "hello";
         
        ?>
</div>
</body>
</html>