<?php
//https://api.darksky.net/forecast/814e5b27d87937feb926c8b0178f77c3/41.545449,-8.426507&units=si
$local = "Braga";

$urlbase = "https://api.darksky.net/forecast/";
$apikey = "814e5b27d87937feb926c8b0178f77c3";
$lat = "41.545449";
$lon = "-8.426507";
$params = "units=si";

$url = $urlbase.$apikey."/".$lat.",".$lon."?".$params;

echo $url;

$dados = file_get_contents($url);
//echo $dados;

$dadosPHP = json_decode($dados);
//var_dump($dadosPHP);

$temperatura = $dadosPHP->currently->temperature;
$iconname = $dadosPHP->currently->icon;
$iconurl = "https://darksky.net/images/weather-icons/".$iconname.".png";
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <h1><?php echo $local; ?></h1>
    <img src="<?php echo $iconurl;?>" />
    <h3> temperatura atual : <?php echo $temperatura; ?> </h3>
</body>
</html>