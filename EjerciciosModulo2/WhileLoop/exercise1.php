<?php
//writes the words in reverse order
$word = 'Program';
$array = str_split($word);
for ($i = count($array); $i > 0; $i--){
    $reversed = $array[$i-1];
    print $reversed;
}