<?php 
include_once("libchaves.php");
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
                <li> <?php echo $numeros[0];?> </li>
                <li> <?php echo $numeros[1];?> </li>
                <li> <?php echo $numeros[2];?></li>
                <li> <?php echo $numeros[3];?></li>
                <li> <?php echo $numeros[4];?></li>
            </ul>
        <!-- estrelas -->
            <ul class="estrelas">
                <li><?php echo $estrelas[0];?></li>
                <li><?php echo $estrelas[1];?></li>
            </ul>
        </div>
        <!-- comentário -->
        <p class="estrelas">&copy; &lt; EI-IPVC 2018 &gt;</p>
    </body>
</html>