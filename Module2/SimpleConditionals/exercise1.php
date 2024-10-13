<?php

$num = rand(1,100);
echo $num . " ";

if ($num < 50) {
    echo "Number is less than 50";
}
elseif ($num > 50) {
    echo "Number is greater than 50";
}
else {
    echo "Number is equal to 50";
}

?>