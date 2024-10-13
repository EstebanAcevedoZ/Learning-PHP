<?php

//Detects if a word is palindrome or not
$word = 'Rotator';
$reversed = '';
$array = str_split($word);
for ($i = count($array); $i > 0; $i--){
    $reversed .= $array[$i-1];
}
print $reversed;
print '<br>';
print gettype($reversed);
print '<br>';
print gettype($word);
print '<br>';
if ($reversed == $word){
    print 'the word is palindrome';
}
else {
    print 'the word is not palindrome';
}

