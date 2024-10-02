<?php
//Defines if a number is perfect or not
//$num = rand(1, 100);
$num = 8128;
print $num;
print '<br>';
$sum = 0;
for ($i = 1; $i < $num+1; $i++){
    if ($num % $i == 0){
        $sum += $i;
    }
    else {
        //echo $i .'no es divisor.';
    }
}
if ($sum - $num == $num) {
    echo 'The number is perfect.';
}
else {
    echo 'The number is not perfect.';
}
