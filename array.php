<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARRAY</title>
</head>
<body>

<?php
     $array1 = array(
        "key1"=>70,
        "key2"=>60,
        "key3"=>80
     );
     
     $array2 = array("value1","value2","value3");

    // multidimensional array //

    $array3 = array(
        "first" => array("first_first" => 20),
        "second" => array("second_first" => 20,
            "second_second" => array(
                "second_second_first" => "sub sub array"
            )
        )
    );

?>
<hr>
<?php
$name_one = array("Zack", "Anthony", "Ram", "Salim", "Raghav");
 
// Accessing the elements directly
echo "Accessing the 1st array elements directly:\n";
echo $name_one[2], "\n";
echo $name_one[0], "\n";
echo $name_one[4], "\n";
 
// Second way to create an indexed array
$name_two[0] = "ZACK";
$name_two[1] = "ANTHONY";
$name_two[2] = "RAM";
$name_two[3] = "SALIM";
$name_two[4] = "RAGHAV";
 
// Accessing the elements directly
echo "Accessing the 2nd array elements directly:\n";
echo $name_two[2], "\n";
echo $name_two[0], "\n";
echo $name_two[4], "\n";

?>
<hr>
<?php

// multidimensional array  //

$cars = array (
    array("KIA",22,18),
    array("BMW",15,13),
    array("AUDI",5,2),
    array("Land Rover",17,15)
  );
    
  echo $cars[0][0].": In stock: ".$cars[1][1].", sold: ".$cars[0][2].".<br>";
  echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
  echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
  echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";

?>
   
</body>
</html>