<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Prueba update title </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <h1>Curso PHP Basico</h1>
        <?php
            echo "comentario";
            $a = 1234;
            $b = -1234;
            $c = 01234;
            $d = 0x1a;
            var_dump($a);
            var_dump($b);
            var_dump($c);
            var_dump($d);

            define('_MES_','Enero');
            define('_CIUDAD_','Santiago');

            echo "el mes es "._MES_."<BR>";
            echo "el mes es "._CIUDAD_."<BR>";

            $nombres =array('octavio','vanessa','isidora','muriel','amador');

            foreach ($nombres as $key => $value) {
                echo( $key .".".$value."<br>");
            }

            echo "<br>";
            echo "<br>";
            echo "<br>";

            $familia =array(
            'padre'=>'octavio',
            'madre'=>'vanessa',
            'hija1'=>'isidora',
            'hija2'=>'muriel',
            'hijo3'=>'amador');

            echo( $familia['hija2']."<br>");

            foreach ($familia as $key => $value) {
                echo( $key .".".$value."<br>");
            }

        ?>
    </body>
</html>