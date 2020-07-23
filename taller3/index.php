<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones PHP</title>
</head>
<body>
    <h1>Funciones</h1>

    <?php
        function getEdad($edad = 16){
            echo "La edad es ".$edad ;
        }

        getEdad();

        echo "<br><br>";

        function getSuma($val1, $val2){
            echo "Las suma es: ".($val1 + $val2);
        }
        getSuma(10, 13);
        echo "<br><br>";

        function getSuma2($val1, $val2){
            return ($val1 + $val2);
        }
        echo "La 2 suma es : ".getSuma2(25, 13);


    ?>
</body>
</html>