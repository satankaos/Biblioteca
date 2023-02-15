<?php
session_start();
include("..\php\conexion.php");


$db = conect();
insertarLibro($db,$titulo,$autor,$editorial,$fecha_publicacion,$genero,$precio,$Imagen,$Descripción);



desconexion($db);
session_destroy()
?>