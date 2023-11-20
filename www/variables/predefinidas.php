<!doctype html>
<html>
<head>
    <title>PHP Basico</title>
    <meta charset="utf-8">
</head>
<body>
<div class="container-fluid">
    <?php

        $numero = 33;

        # los puntos para concatenar
        # variable predefinida "$_SERVER"
        # accedo a esta varible con SERVER_NAME entre corches y entrecomillado SIMPLE
        echo "Nombre del servidor " . $_SERVER['SERVER_NAME'];
        echo "<br>";
        echo "Software del servidor " . $_SERVER['SERVER_SOFTWARE'];
        echo "<br>";
        echo "Puerto del servidor " . $_SERVER['SERVER_PORT'];
        echo "<br>";

        # almacena el resto de variables definidas en nuestro programa, buscara la variabel llamada "numero"
        echo "La variable numero es " . $GLOBALS['numero'];
    ?>
</div>
</body>
</html>