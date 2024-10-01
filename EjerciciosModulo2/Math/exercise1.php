<?php
//max number in an array
$numbers = array();
for ($i = 0; $i < 10; $i++) {
    array_push($numbers, rand(0,50));
}

print_r($numbers);
print '<br>';
print max($numbers);

?>