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
        // ordena de menor a mayor / en orden alfb
        // si 2 son iguales, su orden sera indefinido
        // devuelve boolean creo
        sort($dias);
        var_dump($dias);
        echo "<br>";

        // orden decreciente
        rsort($dias);
        var_dump($dias);
        echo "<br>";
        echo "<br>";


        $dias = array("Lunes", "Martes", "Miercoles", "Jueves", "Viernes");
        var_dump($dias);
        echo "<br>";
        // ordena tanto los valores como las keys
        // antes ordenaba pero le daba igual que posicion ocupaba cada valor, lo unico que importaba era el orden
        // entonces un elemento podia estar asociado a un indice distinto.
        // en este caso no, ya que recuerda la asociacion de indice --> elemento y lo ordena conservando esta asociacion
        asort($dias);
        var_dump($dias);
        echo "<br>";
        echo "<br>";

        // ordena por claves / indices
        $dias = array("Lunes" => 1, "Martes" => 2, "Miercoles" => 3, "Jueves" => 4, "Viernes" => 5);
        var_dump($dias);
        echo "<br>";
        ksort($dias);
        var_dump($dias);
        echo "<br>";
        echo "<br>";

        // orden aleatorio
        // se reasignar nuevas keys a los elementos
        $dias = array("Lunes" => 1, "Martes" => 2, "Miercoles" => 3, "Jueves" => 4, "Viernes" => 5);
        var_dump($dias);
        echo "<br>";
        shuffle($dias);
        var_dump($dias);
        echo "<br>";
        echo "<br>";

    ?>
</div>
</body>
</html>

