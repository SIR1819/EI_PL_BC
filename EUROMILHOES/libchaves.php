<?php
$estrelas = array();
$numeros = array();

while(sizeof($estrelas) < 2) {
    $novo = rand(1,12);
    if (!in_array($novo,$estrelas)) {
        array_push($estrelas,$novo);
    }
}
sort($estrelas);

while(sizeof($numeros) < 5) {
    $novo = rand(1,50);
    if (!in_array($novo,$numeros)) {
        array_push($numeros,$novo);
    }
}
sort($numeros);

//var_dump($estrelas);



?>