<?php

$name = "name";
$value = "izz";

setcookie($name, $value, [
    'expires' => time() + 86400,
    'path' => '/',
    'domain' => 'boiling-beyond-67908.herokuapp.com',
    'samesite' => 'Strict',
]);

echo("demo php");


?>