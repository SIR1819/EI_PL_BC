<?php
include_once("KeyGenerator.php");

$key = new KeyGenerator();

header("Content-Type: application/json");
echo $key->asJSON();
?>