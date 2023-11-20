<!doctype html>
<html>
<head>
    <title>PHP Basico</title>
    <meta charset="utf-8">
</head>
<body>
<div class="container-fluid">
    <?php
        function restar() {
            echo "Soy una funcion para restar";
        }
        function suma($a, $b) {
            return $a + $b;
        }

        restar();
        echo "<br>";
        $resultado = suma(1, 1);
        echo $resultado;
    ?>
</div>
</body>
</html>