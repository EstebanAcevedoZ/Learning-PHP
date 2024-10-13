<?php
$Nombres = $_POST['Nombres'];
$Apellidos = $_POST['Apellidos'];
$Correo = $_POST['Correo'];
$Contrasena = $_POST['Contrasena'];
$DiaNacimiento = $_POST['DiaNacimiento'];
$MesNacimiento = $_POST['MesNacimiento'];
$AnoNacimiento = $_POST['AnoNacimiento'];
$Sexo = $_POST['Sexo'];

echo "Felicitaciones - " . $Nombres . " " . $Apellidos . " ya te has registrado a fecebook. <br>";
echo "Tu correo y contraseña son: <br>";
echo "Correo: " . $Correo . "<br>";
echo "Contraseña: " . $Contrasena . "<br>";

if($Sexo == "Mujer") {
    echo "Bienvenida <br>";
} else if($Sexo == "Hombre") {
    echo "Bienvenido <br>";
} else {
    echo "Bienvenid@ <br>";
}

echo $DiaNacimiento . "-" . $MesNacimiento . "-" . $AnoNacimiento;
?>