<?php
session_start();
include("..\php\conexion.php");


$db = conect();




desconexion($db);
session_destroy()
?>