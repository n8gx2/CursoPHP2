<?php
    include('conexion.php');
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $usuario = $_POST['usuario'];
        $password = $_POST['password'];
        $id = $_POST['id'];
        if (!empty($id)){
            $sql = "UPDATE usuario "
            ."SET nombre = '".$nombre."',"
            ." apeliido = '".$apellido."',"
            ." usuario = '".$usuario."',"
            ." password = '".$password."'"
            ."WHERE id = '".$id ;
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
        $password = '';
        $id = '';
        if (!empty($_GET['opcion']) == 'update') {
            $id = (int)$_GET['id'];
            $sql = "select * from usuario where id = ".$id;
            $result = $enlace->query($sql);            
            $row = $result->fetch_array();

            $nombre = $row['nombre'];
            $apellido = $row['apellido'];
            $usuario = $row['usuario'];
            $password = $row['password'];
            $opcion = 'update';
        }else {
            $opcion = '';
        }
    }
?>