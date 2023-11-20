<!doctype html>
<html>
<head>
    <title>PHP Basico</title>
    <meta charset="utf-8">
</head>
<body>
<div class="container-fluid">
    <?php

    // permiten obtener fecha y hora del servidor
    // se pueden emplear para dar formato a fechas y horas
    // depende del fich de conf: php.ini
    // todos estos tipos de formatos se ven en la docu
    echo date("Y");
    echo "<br>";
    echo date("d M y");
    echo "<br>";
    echo date("d/m/Y");
    echo "<br>";
    echo date("d/m/Y h:i:s");
    echo "<br>";
    echo date("H:i:s");
    echo "<br>";
    // dia en txt
    echo date("l jS \of F Y h:i:s A");
    echo "<br>";
    echo "<br>";

    // array asociativo con info de fecha y hora
    $hoy = getdate();
    var_dump($hoy);
    echo "<br>";
    echo "<br>";

    // devueve la zona horaria predeterminada
    // devuelve string
    echo "Zona horaria " . date_default_timezone_get();
    echo "<br>";
    date_default_timezone_set(  "Africa/Lagos");
    echo "Zona horaria modificada" . date_default_timezone_get();
    echo "<br>";
    echo "<br>";

    ?>
</div>
</body>
</html>
