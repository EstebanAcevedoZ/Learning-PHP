<?php

//prints even numbers
$even = array();
for ($i = 1; $i < 11; $i++) {
    array_push($even, $i*2);
}
foreach ($even as $value) {
    echo $value;
    echo "<br>";
}
?>