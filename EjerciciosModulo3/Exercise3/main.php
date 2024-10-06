<?php

include 'password.php';

$password = new Password(12);
$password->generate();
echo 'The password is: '. $password->getPassword() .'<br>';
$password->verify();
?>