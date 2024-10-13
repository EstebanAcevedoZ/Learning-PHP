<?php
//Max number in an array

//random quantity of elements
$random = rand(1,10);

$array1 = array();

for ($i = 0; $i < $random; $i++) {
    array_push($array1, rand(0,50));
}
print_r($array1);

$max = max($array1);

print "<br>";
print $max;

?>