<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Type Conversion</title>
</head>
<body>
   
    <?php

        $x="123.abc";
        echo "a=".$x;
        echo"<br> Type of a is".gettype($x);
        settype($x,"int");
        echo "<br>After conversion of a is ".gettype($x);

    ?>

</body>
</html>