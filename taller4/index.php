<?php
    include('conexion.php');
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $usuario = $_POST['usuario'];
        $password = $_POST['password'];
        
        if (!empty($id)){
            $sql = "UPDATE usuario SET nombre = '".$nombre."', "
            ."apellido = '".$apellido."', "
            ."usuario = '".$usuario."', "
            ."password = '".md5('$password')."'  WHERE id = ".$id ;
            mysqli_query($enlace, $sql);

        }else {
            if (!empty($nombre) && !empty($apellido) && !empty($usuario) && !empty($password) ) {
                // echo "llegaron los datos";
                $sql = "INSERT INTO usuario (nombre, apellido, usuario,password) VALUES('$nombre','$apellido','$usuario',md5('$password'))";
                mysqli_query($enlace, $sql);
                $regis = mysqli_affected_rows($enlace);
                echo $regis."fila afectadas";
            }else {
                echo "debes ingresar todos los datos";
            }
        }

    }else if ($_SERVER['REQUEST_METHOD'] == 'GET') {
        $opcion = '';
        $nombre = '';
        $apellido = '';
        $usuario = '';
        $password = '';
        $id = '';

        if (!empty($_GET['opcion'])) {
            $id = (int)$_GET['id'];
            if ($_GET['opcion'] == 'update') {
                
                $sql = "select * from usuario where id = ".$id;

                $result = $enlace->query($sql);            
                $row = $result->fetch_array();

                $nombre = $row['nombre'];
                $apellido = $row['apellido'];
                $usuario = $row['usuario'];
                $password = $row['password'];
                $opcion = 'update';

            }else if ($_GET['opcion'] == 'delete') {
                $sql = "delete from usuario where id = ".$id;
                mysqli_query($enlace, $sql);
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Curso PHP - php-mysql</title>
</head>
<body>
    <h1>ingreso datos php</h1>
    <form action="index.php" method="POST">

        <input type="hidden" name="id" value="<?php echo $id;?>"><br>

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="<?php echo $nombre;?>"><br>

        <label for="apellido">Apellidos:</label>
        <input type="text" name="apellido" value="<?php echo $apellido;?>"><br>

        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" value="<?php echo $usuario;?>"><br>

        <label for="password">Password:</label>
        <input type="password" name="password" value="<?php echo $password;?>"><br>

        <input type="submit" value="Registrar">          

    </form>
    <br><br>
    <h2>Consulta de Usuarios</h2>
    <br>
    <div class="tabla">
        <div>
        <div class="columna">nombre</div>
        <div class="columna">apellido </div>
        <div class="columna">usuario</div>
        <div class="columna">password</div>
        <div class="columna">Opciones</div>
        </div>
        <div>
            <?php
                // include("conexion.php");
                $sql ="select * from usuario";
                $result = $enlace->query($sql);            
                while ($row =$result->fetch_array()) {
                    echo '<div class="columna">'.$row['nombre'].'</div>';
                    echo '<div class="columna">'.$row['apellido'].'</div>';
                    echo '<div class="columna">'.$row['usuario'].'</div>';
                    echo '<div class="columna">'.$row['password'].'</div>';
                    // echo '<div class="columna">'.$row['id'].'</div>';
                    echo "<div class='columna'><a href='index.php?opcion=update&id=".$row['id']."'>Modificar</a> </div>"."";
                    echo "<div class='columna'><a href='index.php?opcion=delete&id=".$row['id']."'>Eliminar</a> </div>"."<br>";
                } 
            ?> 
        </div>
    </div>

</body>
</html>