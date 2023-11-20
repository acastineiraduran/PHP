<!doctype html>
<html>
<head>
    <title>PHP Basico</title>
    <meta charset="utf-8">
</head>
<body>
<div class="container-fluid">
    <?php
        $dias = array("Lunes", "Martes", "Miercoles");
        $numeros = array(10, 20, 30, 40);
        # genera una array de 10 elementos. No esta vacio = me esta reservando esas posiciones pero no hay nada en ellas
        $nombres = array(10);
        # array vacio = no hay posiciones definidas, no estaria reservando nada
        $datos = array();
        # creo array sin constructor
        $valores = [10, 20, 30, 40];

        echo $dias[1]; # Martes
        echo "<br>";
        # muestra el tipo de variable, el tamanio y su contenido, de manera estructurada
        var_dump($dias);
        echo "<br>";
        var_dump($numeros);

    ?>
</div>
</body>
</html>
