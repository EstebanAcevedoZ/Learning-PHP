<?php
// detects if the number is even or odd
function isEven($number) { 
    if ($number == 0){
        return 'number is 0';
    } 
    elseif ($number %2== 0) {
        return 'Its even';
    }
    else {
        print 'Its odd';
    }
}

print isEven(5);