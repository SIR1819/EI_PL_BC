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
                <li> <?php echo rand(1,50);?></li>
                <li> <?php echo rand(1,50);?></li>
                <li> <?php echo rand(1,50);?></li>
                <li> <?php echo rand(1,50);?></li>
                <li> <?php echo rand(1,50);?></li>
            </ul>
        <!-- estrelas -->
            <ul class="estrelas">
                <li><?php echo rand(1,12);?></li>
                <li><?php echo rand(1,12);?></li>
            </ul>
        </div>
        <!-- comentário -->
        <p class="estrelas">&copy; &lt; EI-IPVC 2018 &gt;</p>
    </body>
</html>