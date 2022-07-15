<?php

function param(&$ref) {
    $ref++;
    echo $ref . "<br>";
}

$var = 5;

param($var);
echo $var;

?>