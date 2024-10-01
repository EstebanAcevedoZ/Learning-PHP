<?php

$num1 = rand(1,10);
$num2 = rand(1,10);
echo $num1 . " & " . $num2;
echo "<br>";
if ($num1 < $num2) {
    echo $num1. " is less than ". $num2;
    $num = $num2**$num1;
    echo "<br>";
    echo $num;
}
elseif ($num1 > $num2) {
    echo $num1. " is greater than ". $num2;
    $num = $num1**$num2;
    echo "<br>";
    echo $num;
}
else {
    echo "Numbers are equal";
}

?>