<!doctype html>
<html>
<head>
    <title>PHP Basico</title>
    <meta charset="utf-8">
</head>
<body>
<div class="container-fluid">
    <?php

        $valor1 = 22;
        $valor3 = 3;
        $valor4 = 6;
        function prueba() {
            #echo $valor1; # error pq es de ambito global
            $valor2 = 10;
            echo($valor2);

            global $valor3,$valor4; # le digo que son de tipo global para que me deje utilizarla en la fun
            $resultado = $valor3 + $valor4;
            echo $resultado;
        }

        #echo $valor2; # error pq es de ambito local
        prueba();
    ?>
</div>
</body>
</html>