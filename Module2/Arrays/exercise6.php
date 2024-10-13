<?php
//calculates the amount of people below and above average

$array1 = array();
$counter1 = 0;
$counter2 = 0;
for ($i = 0; $i < 5; $i++) {
    array_push($array1, rand(5000,10000)/100);
}
print_r($array1);
print '<br>';
$avg = array_sum($array1)/count($array1);
print '<br>';
print 'The average weight is '. $avg . ' kg';
print '<br>';

for ($i = 0; $i < count($array1); $i++) {
    if ($array1 [$i] >= $avg) {
        $counter1 += 1;
    }
    elseif ($array1 [$i] <= $avg) {
        $counter2 += 1;
    }
}

print 'There are '. $counter1 . ' people above average';
print '<br>';
print 'There are '. $counter2 . ' people below average';