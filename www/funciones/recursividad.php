<!doctype html>
<html>
<head>
    <title>PHP Basico</title>
    <meta charset="utf-8">
</head>
<body>
<div class="container-fluid">
    <?php
        // RECURSIVIDAD: funcion que se llama a si misma dentro de la funcion
        // calcular el factorial de un numero: !5 = 1 * 2 * 3 * 4 * 5
        function factorial($num) {
            if($num == 1) {
                echo "$num";
                return 1;
            } else {
                echo $num . " x ";
                return $num * factorial($num - 1);
            }
        }

        $resultado = factorial(5);
        echo " = " .  $resultado;

    ?>
</div>
</body>
</html>