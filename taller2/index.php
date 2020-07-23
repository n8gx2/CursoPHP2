<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP - Taller 2</title>
</head>
<body>
    <h1>Controles de Flujo</h1>

<?php
    $edad = 65;
    if($edad >= 0 && $edad <= 11){
        echo "Es un niño de ".$edad." de edad.";
    }else if($edad >= 12 && $edad <= 17){
        echo "Es un adolecente de ".$edad." de edad.";
    }else if($edad >= 18 && $edad <= 60){
        echo "Es un adulto de ".$edad." de edad.";
    }else{
        echo "Es un adulto mayor de ".$edad." de edad.";
    }
    echo "<br><br>";

    $mes = 3;
    switch ($mes) {
        case 1:
            echo "Enero";
            break;
        case 2:
            echo "Febrero";
            break;
        case 3:
            echo "Marzo";
            break;
        case 4:
            echo "Abril";
            break;                                            
        default:
            echo "No es un mes ".$mes;
            break;
    }
    echo "<br><br>";

    for ($i=0; $i <= 10; $i++) { 
        echo "Ciclo For - Número ".$i."<br>";
    }
    echo "<br><br>";
    $a=5;
    while ($a <= 10) {
        echo "Ciclo While - Número ".$a."<br>";
        $a++;
    }
    echo "<br><br>";

    do {
        echo "Ciclo DoWhile - Número ".$a."<br>";
        $a--;
    } while ($a >= 0);

?>

</body>
</html>