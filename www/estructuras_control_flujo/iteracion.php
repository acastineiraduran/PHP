<!doctype html>
<html>
<head>
    <title>PHP Basico</title>
    <meta charset="utf-8">
</head>
<body>
<div class="container-fluid">
    <?php
        // repetir acciones y generar bucles
        // for, while, do while, for each
        for($i = 0; $i <= 10; $i++){
            echo "Numero iteracion: " . $i;
            echo "<br>";
        }

        echo "<br>";

        $dias = array("Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo");
        foreach ($dias as $valor){
            echo $valor;
            echo "<br>";
        }
        echo "<br>";
        $numeros = array("Uno" => 1, "Dos" => 2, "Tres" => 3, "Cuatro" => 4, "Cinco" => 5, "Seis" => 6, "Siete" => 7);
        foreach ($numeros as $key => $valor){
            echo $key . " --> " . $valor;
            echo "<br>";
        }

        echo "<br>";

        $num = 0;
        while ($num <= 10) {
            echo $num . ",";
            $num++;
        }
        echo "<br>";
        $num2 = 0;
        do {
            echo "Dentro del do while!";
        } while($num2 != 0);

    ?>
</div>
</body>
</html>
