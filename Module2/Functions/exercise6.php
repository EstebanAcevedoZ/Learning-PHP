<?php

//gives you the name of the month 

function month_name($month) {
    if ($month == 1){
        return 'January';
    }
    elseif ($month == 2){
        return 'February';
    }
    elseif ($month == 3){
        return 'March';
    }
    elseif ($month == 4){
        return 'April';
    }
    elseif ($month == 5){
        return 'May';
    }
    elseif ($month == 6){
        return 'June';
    }
    elseif ($month == 7){
        return 'July';
    }
    elseif ($month == 8){
        return 'August';
    }
    elseif ($month == 9){
        return 'September';
    }
    elseif ($month == 10){
        return 'October';
    }
    elseif ($month == 11){
        return 'November';
    }
    elseif ($month == 12){
        return 'December';
    }
    else {
        return 'Month is not valid';
    }
}

print month_name(2);