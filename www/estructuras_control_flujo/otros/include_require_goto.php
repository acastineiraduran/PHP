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
    ?>
</div>
</body>
</html>
