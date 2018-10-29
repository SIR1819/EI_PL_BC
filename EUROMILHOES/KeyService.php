<?php
include_once("KeyGenerator.php");

$key = new KeyGenerator();
sleep(3);
header("Content-Type: application/json");
echo $key->asJSON();
?>