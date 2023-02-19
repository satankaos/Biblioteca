<?php
session_start();
include("..\php\conexion.php");

$titulo=filter_var(trim($_POST["Titulo"]), FILTER_SANITIZE_STRING);
$autor=filter_var(trim($_POST["Autor"]), FILTER_SANITIZE_STRING);
$editorial=filter_var(trim($_POST["Editorial"]), FILTER_SANITIZE_STRING);
$fecha_publicacion=filter_var(trim($_POST["Fecha_publicacion"]), FILTER_SANITIZE_STRING);
$genero=filter_var(trim($_POST["Genero"]), FILTER_SANITIZE_STRING);
$precio=filter_var(trim($_POST["Precio"]), FILTER_SANITIZE_STRING);
$Imagen="img";
$Descripción=filter_var(trim($_POST["Descripción"]), FILTER_SANITIZE_STRING);
$db = conect();
insertarLibro($db,$titulo,$autor,$editorial,$fecha_publicacion,$genero,$precio,$Imagen,$Descripción);
if (insertarLibro($db,$titulo,$autor,$editorial,$fecha_publicacion,$genero,$precio,$Imagen,$Descripción)) {
header("Location:verLibros.php");
}


desconexion($db);
session_destroy()
?>