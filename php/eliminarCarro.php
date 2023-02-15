<?php
require("conexion.php");
 $db = conect();
 borrarCarro($_POST['id'],$db);
 header('Location: carros.php');
 desconexion($db);
 ?>