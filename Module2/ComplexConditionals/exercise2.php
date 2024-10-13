<?php

$num = rand(0,100000);
echo $num . " ";

if (strlen($num) == 4) {
    echo "The number has 4 digits";
}

else if (strlen($num) >= 4) {
    echo "The number exceeds the 4 digits";
}
else {
    echo "The number has less than 4 digits";
}
?>