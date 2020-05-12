<?php

$name = "name";
$value = "izz";

setcookie($name, $value, [
    'expires' => time() + 86400,
    'path' => '/',
    'domain' => 'php-demo-01.herokuapp.com',
    'samesite' => 'Strict',
]);

echo("demo php");


?>