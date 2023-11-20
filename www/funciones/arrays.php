<!doctype html>
<html>
<head>
    <title>PHP Basico</title>
    <meta charset="utf-8">
</head>
<body>
<div class="container-fluid">
    <?php


        // Compara un array con uno o mas arrays
        // devuelve los valores del primer array que no esten en ninguno de los otros arrays
        $numeros = array(1, 2, 3, 4, 5);
        $numerosPares = array(2, 4);
        $numerosPrimos = array(2, 3, 5);

        $diferencias = array_diff($numeros, $numerosPares, $numerosPrimos);
        var_dump($diferencias);

    ?>
</div>
</body>
</html>