<!doctype html>
<html>
<head>
    <title>PHP Basico</title>
    <meta charset="utf-8">
</head>
<body>
<div class="container-fluid">
    <?php
        $dias = array("Lunes", "Martes", "Miercoles", "Jueves", "Viernes");
        var_dump($dias);
        echo "<br>";
        // extrae el primer elemento de mi array, lo borra y me lo devuelve
        $elementoExtraido = array_shift($dias);
        var_dump($dias);
        echo "<br>";
        echo "Elemento extraido=" . $elementoExtraido;
        echo "<br>";
        echo "<br>";

        $dias = array("Lunes", "Martes", "Miercoles", "Jueves", "Viernes");
        var_dump($dias);
        echo "<br>";
        // añade un elemento al principio de la array y me devuelve el numero de elementos de la array
        $nElementos = array_unshift($dias,"Domingo");
        var_dump($dias);
        echo "<br>";
        echo "Numero elementos=" . $nElementos;
        echo "<br>";
        echo "<br>";

        // quita ultimo ele de la array y me lo devuelve
        array_pop($dias);
        var_dump($dias);
        echo "<br>";
        echo "<br>";

        // añade un ultimo elemento al array y me devuelve el num de ele
        array_push($dias, "Sabado");
        var_dump($dias);
        echo "<br>";
        echo "<br>";

    ?>
</div>
</body>
</html>
