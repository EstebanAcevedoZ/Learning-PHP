<?php
//calculates factorial of a number
$num = 10;
$factorial = 1;
$operator = $num;

for ($i = 0; $i < $num; $i++) {
    $factorial *= $operator;
    $operator -= 1;
}
print $factorial;