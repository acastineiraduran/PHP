<!doctype html>
<html>
<head>
    <title>PHP Basico</title>
    <meta charset="utf-8">
</head>
<body>
<div class="container-fluid">
    <?php

        // operadores aritmeticos
        // operadores de asignacion
        // operadores de comparacion
        # compara si el valor es igual y del mismo tipo
        $var1 = 3;
        $var2 = 3;
        $var3 = 5;
        $var4 = "3";

        if($var1 == $var2) {
            echo $var1 . " y " . $var2 . " Son iguales";
        }
        echo "<br>";
        if($var1 != $var3) {
            echo $var1 . " y " . $var2 . " No son iguales";
        }
        echo "<br>";
        if($var1 === $var4) {
            echo $var1 . " y " . $var2 . " Son iguales y del mismo tipo";
        } elseif ($var1 == $var4) {
            echo $var1 . " y " . $var2 . " Son iguales pero de distinto tipo";
        } else {
            echo $var1 . " y " . $var2 . " No son iguales";
        }
        echo "<br>";

        // operadores incremento y decremento
        // operadores logico
        # operador tenario ?
        // operadores para String -> el concatenador "."



    ?>
</div>
</body>
</html>
