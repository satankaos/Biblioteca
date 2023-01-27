<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
<?php
include("./conexion.php");
$servername = "localhost";
    $database = "libros_bd";
    $username = "admin";
    $password = "21232f297a57a5a743894a0e4a801fc3";
conexion($servername, $username, $password, $database);
$nombreU= filter_var(trim($_POST["nombre"]), FILTER_SANITIZE_STRING);
echo $nombreU;
$Correo=$_POST['nombre'];
$Contr=$_POST['nombre'];
?>
    </form>
</body>
</html>