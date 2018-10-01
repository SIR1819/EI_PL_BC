<?php 
include_once("KeyGenerator.php");

$chave = new KeyGenerator();

?>
<html>
    <head>
        <title>Euromilhões</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="euromilhoes.css"/>
    </head>
    <body>
        <h1>Euromilhões</h1>
        <!-- chave -->
        <div>
        <!-- numeros -->
            <ul class="numeros">
                <li> <?php echo $chave->numeros[0];?> </li>
                <li> <?php echo $chave->numeros[1];?> </li>
                <li> <?php echo $chave->numeros[2];?></li>
                <li> <?php echo $chave->numeros[3];?></li>
                <li> <?php echo $chave->numeros[4];?></li>
            </ul>
        <!-- estrelas -->
            <ul class="estrelas">
                <li><?php echo $chave->estrelas[0];?></li>
                <li><?php echo $chave->estrelas[1];?></li>
            </ul>
        </div>
        <!-- comentário -->
        <p class="estrelas">&copy; &lt; EI-IPVC 2018 &gt;</p>
    </body>
</html>