<?php
//detects age category
$age = rand(1,100);
echo $age . "<- age";
echo "<br>";
if ($age <= 5) {
    echo "Infant";
}
elseif ($age <= 10) {
    echo "Child";
}
elseif ($age <= 15) {
    echo "Pre-teen";
}
elseif ($age <= 18) {
    echo "Teen";
}
elseif ($age <= 25) {
    echo "Pre-adult";
}
elseif ($age <= 40) {
    echo "Adult";
}
elseif ($age <= 55) {
    echo "Pre-elder";
}
else {
    echo "Elder";
}

?>