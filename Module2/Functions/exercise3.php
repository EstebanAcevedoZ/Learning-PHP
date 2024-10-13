<?php
//same as exercise1 but different
function v_cylinder($radius, $height){
    $volume = M_PI * ($radius**2) * $height;
    return $volume;
}
print v_cylinder(2,5);