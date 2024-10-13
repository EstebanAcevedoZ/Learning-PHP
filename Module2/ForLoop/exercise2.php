<?php
//caculates the divider of a number
$num = rand(1, 100);
print $num;
print '<br>';
for ($i = 1; $i < $num+1; $i++){
    if ($num % $i == 0){
        echo $i .', ';
    }
    else {
        //echo $i .'no es divisor.';
    }
}