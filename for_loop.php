<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For loop</title>
</head>
<body>
    
<?php
    
    for($x= 0; $x <= 10; $x++){
        echo "The number is: $x<br>";
    }
    
    $color = array("red","green","blue","yellow");

    foreach ($color as $value){
        echo "$value <br>";
    }

    $age = array("Peter"=>"35","Ben"=>"37","Joe"=>"43");

    foreach($age as $x => $val){
        echo "$x - $val <br>";
    }

?>

</body>
</html>