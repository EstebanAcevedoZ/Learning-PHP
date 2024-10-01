<?php

$grade = rand(0,10);

echo $grade;
echo "<br>";
if ($grade > 6) {
    echo 'approved';
}
else{
    echo 'not approved';
}

?>