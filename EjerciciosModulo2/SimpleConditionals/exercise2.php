<?php

$num = rand(42,55);
echo $num . " Hours worked.";
echo "<br>";

if ($num > 42) {
    $extra = $num - 42;
    echo "User worked ". $extra ." hours extra";
}

else {
    echo "User worked normal hours";
}

?>