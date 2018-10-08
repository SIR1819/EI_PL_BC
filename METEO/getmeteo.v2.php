<?php
if (isset($_GET["local"])) {
    $local = urlencode($_GET["local"]);
} else {
    $local = NULL;
}


if ($local) {
// XFNxQ82etHEFDAjhOSzhE4hozjwbRq45
//http://www.mapquestapi.com/geocoding/v1/address?key=KEY&location=Washington,DC

$urlbase_c = "http://www.mapquestapi.com/geocoding/v1/address?";
$apikey_c = "XFNxQ82etHEFDAjhOSzhE4hozjwbRq45";
$params_c = "key=".$apikey_c."&"."location=".$local;

$url_c = $urlbase_c.$params_c;

$dados_c = file_get_contents($url_c);
$dados_c_PHP = json_decode($dados_c);

$lat = $dados_c_PHP->results[0]->locations[0]->latLng->lat;
$lon = $dados_c_PHP->results[0]->locations[0]->latLng->lng;


$urlbase = "https://api.darksky.net/forecast/";
$apikey = "814e5b27d87937feb926c8b0178f77c3";
//$lat = "41.545449";
//$lon = "-8.426507";
$params = "units=si";


$url = $urlbase.$apikey."/".$lat.",".$lon."?".$params;
$dados = file_get_contents($url);
$dadosPHP = json_decode($dados);

$temperatura = $dadosPHP->currently->temperature;
$iconname = $dadosPHP->currently->icon;
$iconurl = "https://darksky.net/images/weather-icons/".$iconname.".png";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
</head>
<body>
    <?php if ($local) include "infolocal.inc.php"; ?>
    <form action="getmeteo.v2.php" method="GET">
        <input type="text" name="local" id="ilocal" placeholder="insira local"/>
        <input type="submit" value="obter coordenada">
    </form>
</body>
</html>