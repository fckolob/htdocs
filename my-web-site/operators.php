<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

    // String operator.

    $a = "Hello";
    $b = "World!";
    $c = $a . " " . $b;

    echo $c;

    // Arithmetic operators.

    echo "<br>";

    echo 1 + 2;

    echo "<br>";

    // Modulus.

    echo 10 % 3;

    echo "<br>";

    // Power.
    
    echo 2 ** 3;

    echo "<br>";

    // Assigment operators.

    $a = 2;

    $a = $a + 4;

    echo $a;

    echo "<br>";

    // Better practice.

    $a += 4;

    echo $a;

    echo "<br>";

    // Comparison operator.

    $b = 2;

    $c = "2";

    $d = 3;

    $f = 7;

    // Not comparing types.

    if($a == $b){

        echo "This statement is true";

    }

    // Comparing types.

    if($a === $b){
        echo "These variables are of the same type";
    }

    // Logical operators.


    if($b == $c and $d < $f){

        echo "The two conditions are true";

    }

    if($b === $c or $d < $f){

        echo "At least one of the conditions is true";

    }

    // && used for and, || used for or. 

    // Incrementing and decrementing operators.

    $g = 1;

    echo ++ $g;

    echo "<br>";

    echo -- $g;


    ?>



</body>
</html>