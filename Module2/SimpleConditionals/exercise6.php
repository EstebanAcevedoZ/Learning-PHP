<?php

$num1 = rand(1,100);
$num2 = rand(1,100);
echo $num1 . " & " . $num2;
echo "<br>";
if ($num1 % $num2 == 0) {
    echo $num1 ." is multiple of ". $num2;
}
elseif ($num2 % $num1 == 0) {
    echo $num2 ." is multiple of ". $num1;
}
else {
    echo "numbers are not multiple";
}

?>