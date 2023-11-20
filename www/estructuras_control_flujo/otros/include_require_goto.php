<!doctype html>
<html>
<head>
    <title>PHP Basico</title>
    <meta charset="utf-8">
</head>
<body>
<div class="container-fluid">
    <?php
        # include

        // permite meter un fichero php dentro de otro
        // si no encuentra muestr un Warning.
        // con include_once, si el fichero ya se ha incluido, no se vuelve a incluir.
        echo "Soy el primer fichero";
        include "include2.php";
        include "include2.php";
        // solo lo incluiria una vez
        //include_once "include2.php"

        //include "includessss2.php"; # No encuentra fichero --> Produce un WARNING

        # require (igual que include pero cd no encuentra fichero produce error fatal)

        require "include2.php";
        //require_once "include2.php";

        //require "includessss2.php"; # No encuentra fichero --> Produce un WARNING + ERROR FATAL

        # goto - NO RECOMENDABLE, MALA PRACTICA

    ?>
</div>
</body>
</html>
