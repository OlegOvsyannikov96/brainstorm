<?php

require_once('combinatorics.php');

$str = "ABCD";
$length = 2;


$obj = new Combinatorics();

try {
    
    $obj->showSubStr($str, $length);
} catch (Exception $e) {

    echo "error: " . $e->getMessage() . "</br>";
}