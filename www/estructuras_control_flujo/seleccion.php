<!doctype html>
<html>
<head>
    <title>PHP Basico</title>
    <meta charset="utf-8">
</head>
<body>
<div class="container-fluid">
    <?php
        // decidir acciones segun condiciones
        // if, else, elseif, switch
        if(true) {
            echo "verdad!";
        }
        echo "<br>";
        if(true):
            echo "mentira!";
        endif;
        echo "<br>";
        // sintaxis alternativa con operador ternario
        $nota = 5;
        $final = $nota >= 5 ? "aprobado" : "suspenso";
        echo "resultado: " . $final;
        echo "<br>";

        $dia = "Martes";
        switch ($dia) {
            case "Lunes":
                echo "Hoy es lunes";
                break;
            case "Martes":
                echo "Hoy es martes";
                break;
            case "Miercoles":
                echo "Hoy es miercoles";
                break;
            default:
                echo "Hoy es Jueves, Viernes, Sabado o Domingo";
        }

    ?>
</div>
</body>
</html>
