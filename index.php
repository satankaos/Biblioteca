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
conect($servername, $username, $password, $database);

$nombreU= filter_var(trim($_POST["nombre"]), FILTER_SANITIZE_STRING);
$contraseñaU= filter_var(trim($_POST["contraseña"]), FILTER_SANITIZE_STRING);
$contraseñaUr= filter_var(trim($_POST["repetir"]), FILTER_SANITIZE_STRING);
$usuarioU= filter_var(trim($_POST["correo"]), FILTER_SANITIZE_STRING);
echo $nombreU;
echo $contraseñaU;
if ($contraseñaU==$contraseñaUr) {
    
} else {
    echo "<p>Contraseñas DIF iguales</p>";
}




?>
    </form>
</body>
</html>