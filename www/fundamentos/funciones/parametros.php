<!doctype html>
<html>
<head>
    <title>PHP Basico</title>
    <meta charset="utf-8">
</head>
<body>
<div class="container-fluid">
    <?php
        // un param es aquello que recibe la funcion para hacer algo con el. Lo puedo pasar por valor o por ref:
        // Buena practica: Definir PRIMERO las funcions y DESPUES las variables

        # --PASO POR VALOR--
        // le paso a la func una "copia"
        // No afecta a la variable original
        function funcPorValor($a) {
            return $a = $a + 2;
        }

        # --PASO POR REFERENCIA--
        // paso la propia variable
        // si afecta a la variable original
        // hace unas versiones esto no se acepta en la llamada de la func, si no que lo tengo que aclarar en la definicion de la func
        // se indica con "&"
        function funcPorReferencia(&$a) {
            return $a = $a + 2;
        }

        $a = 4;

        funcPorValor($a);
        echo "Paso por valor: " . $a;

        echo "<br>";

        funcPorReferencia($a);
        echo "Paso por referencia: " . $a;

    ?>
</div>
</body>
</html>