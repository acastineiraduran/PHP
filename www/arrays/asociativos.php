<!doctype html>
<html>
<head>
    <title>PHP Basico</title>
    <meta charset="utf-8">
</head>
<body>
<div class="container-fluid">
    <?php
        // clave => valor
        // RECORDAD: Case Sensitive
        $navegador = array("navegador1" => "Chrome", "navegador2" => "Firefox", "navegador3" => "Safari");
        $datos = array("nombre" => "Angel", "edad" => 34, "profesor" => true, 3 => 100);

        echo "Navegador 3: " . $navegador["navegador3"];
        echo "<br>";
        echo "Nombre: " . $datos["nombre"];
        echo "<br>";
        var_dump($navegador);
        echo "<br>";
        var_dump($datos);

    ?>
</div>
</body>
</html>