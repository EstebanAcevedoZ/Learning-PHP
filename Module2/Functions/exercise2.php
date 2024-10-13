<?php
//same as exercise1 but different
function sumatorial($number1, $number2, $number3, $number4, $number5){
    $sum = $number1 + $number2 + $number3 + $number4 + $number5;
    return $sum;
}

$temp = sumatorial(2,5,1,8,10);
print $temp;