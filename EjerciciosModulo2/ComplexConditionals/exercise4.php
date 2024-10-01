<?php
//detects level 
$level = rand(1,100);
echo $level . "% <- percentage";
echo "<br>";
if ($level >= 90) {
    echo "Max level";
}
elseif ($level >= 75) {
    echo "Medium";
}
elseif ($level >= 50) {
    echo "Regular";
}
else {
    echo "Out of level";
}

?>