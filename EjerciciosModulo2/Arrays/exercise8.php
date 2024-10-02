<?php
// splits a word into separated characters

$word = 'Colombia';
$array = str_split($word);

print_r($array);
print 'The word has '.count($array).' characters';