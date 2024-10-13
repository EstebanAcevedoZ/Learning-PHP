<?php
//grades of 2 groups

$group1 = array();
$group2 = array();

for ($i = 0; $i < 10; $i++) {
    array_push($group1, rand(0,10));
}
for ($i = 0; $i < 10; $i++) {
    array_push($group2, rand(0,10));
}
print_r($group1);
print '<br>';
print_r($group2);
print '<br>';
$avg1 = array_sum($group1)/count($group1);
print '<br>';
$avg2 = array_sum($group2)/count($group2);
print '<br>';
print 'The grade average of group 1 is '. $avg1;
print '<br>';
print 'The grade average of group 2 is '. $avg2;
print '<br>';
$avg3 = ($avg1 + $avg2)/2;
print 'The average grades of the 2 groups is '. $avg3;
print '<br>';
if ($avg1 > $avg2) {
    print ' The group with better grade average is group 1';
}
elseif ($avg1 == $avg2) {
    print 'Both groups have the same grade average';
}
else {
    print ' The group with better grade average is group 2';
}
