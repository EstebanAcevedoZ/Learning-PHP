<?php 

$cadena = "Diego-Palacio.5;28;41;08";
$cadena = str_replace("-"," ",$cadena);
$cadena = str_replace("."," ",$cadena);
$cadena = str_replace(";","",$cadena);
echo $cadena

?>