<?php
require("conexion.php");
 $db = conect();
 if ($_POST['button_eliminar']) {
    $id=$_POST['id'];
    echo $id;
    $sql = "DELETE FROM usuario WHERE usuario.Id_usuario = $id ";

// Ejecutar la consulta
$result = mysqli_query($db, $sql);
header('Location: homeAd.php');
 } else {
    # code...
 }
 
desconexion($db)
?>