<?php
// consumir uma key
$keyFromService = file_get_contents("http://localhost/SIR1819/EI_PL_BC/EUROMILHOES/KeyService.php");
$key = json_decode($keyFromService);
//var_dump($key);

?>
<html>
    <head>
        <title>Euromilhões</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="euromilhoes.css"/>
    </head>
    <body>
        <h1>Euromilhões</h1>
        <!-- key -->
        <div>
        <!-- numeros -->
            <ul class="numeros">
                <?php
                foreach($key->numeros as $numero) {
                    echo "<li>".$numero."</li>";
                    }
                ?>
            </ul>
        <!-- estrelas -->
            <ul class="estrelas">
            <?php
            foreach($key->estrelas as $estrela) {
                echo "<li>".$estrela."</li>";
                }
            ?>
            </ul>
        </div>
        <!-- comentário -->
        <p class="estrelas">&copy; &lt; EI-IPVC 2018 &gt;</p>
    </body>
</html>