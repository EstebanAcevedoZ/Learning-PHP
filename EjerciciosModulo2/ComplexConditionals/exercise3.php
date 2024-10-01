<?php

$num1 = rand(0,100000);
$num2 = rand(0,100000);
$num3 = rand(0,100000);
echo $num1 . " ". $num2 . "  ". $num3 . "  ";
echo "<br>";

if ($num1 >= $num2 && $num1 >= $num3) {
    echo $num1 ." is the greatest number.";
}
else if ($num2 >= $num1 && $num2 >= $num3) {
    echo $num2 ." is the greatest number.";
}
else {
    echo $num3 ." is the greatest number.";
}
?>