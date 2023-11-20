<!doctype html>
<html>
<head>
    <title>PHP Basico</title>
    <meta charset="utf-8">
</head>
<body>
<div class="container-fluid">
    <?php
        for($i = 0; $i < 5; $i++) {
            echo "Dentro del for i = " . $i;
            echo "<br>";
            if($i == 3) {
                echo "Salimos del for porque i = " . $i;
                break;
            }
        }
        echo "<br>";

        for($i = 0; $i < 5; $i++) {
            if($i == 3) {
                continue; // no se imprime lo que va despues, comienza de nuevo en el for()
            }
            echo "Dentro del for i = " . $i;
            echo "<br>";
        }
    ?>
</div>
</body>
</html>
