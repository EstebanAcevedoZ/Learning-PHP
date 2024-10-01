<?php

$num1 = rand(1,10);
$num2 = rand(1,10);
echo $num1 . " & " . $num2;
echo "<br>";
if ($num1 != $num2) {
    $result = ($num1 < $num2) ? $num1 ." is less than ". $num2. " and the power is ". $num2**$num1: $num1 ." is greater than ". $num2  ." and the power is ". $num1**$num2;
    echo $result;
}
else {
    echo $num1 ." is equal to ". $num2;
}

?>