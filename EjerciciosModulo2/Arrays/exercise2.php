<?php

// prints array
$arrayName = array();
$arrayName[4] = 80;
$arrayName[9] = "Hola";
$arrayName[22] = 99;
$arrayName[156] = "Mundo";

foreach ($arrayName as $value) {
    print $value;
    print "<br>";
}

?>