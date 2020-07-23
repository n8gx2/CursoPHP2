<?php
include('conexion.php');
function consulta_usuarios(){
    $sql ="select * from usuario";
    $result = $enlace->query($sql);
    while ($row =$result->fetch_array()) {
        echo $row['usuario'];
    }     
}
?>