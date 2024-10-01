<?php
//Shows the nmber of elements per array

//random quantity of elements
$random1 = rand(1,10);
$random2 = rand(1,10);

//arrays
$array1 = array();
$array2 = array();
$array3 = array();

for ($i = 0; $i < $random1; $i++) {
    array_push($array1, rand(0,50)*2);
}
for ($i = 0; $i < $random2; $i++) {
    array_push($array2, rand(0,25)*2+1);
}
$maxLength = max($random1, $random2);
for ($i = 0; $i < $maxLength; $i++) {
    //Case where $array1 or $array2 may not have enough elements
    $val1 = isset($array1[$i]) ? $array1[$i] : 0;
    $val2 = isset($array2[$i]) ? $array2[$i] : 0;

    array_push($array3, $val1 + $val2);
}

print count($array1);
print '<br/>';
print count($array2);
print '<br/>';
print count($array3);


?>