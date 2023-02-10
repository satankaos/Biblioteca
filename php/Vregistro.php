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
include("..\php\conexion.php");

$conn = conect();

$Nombre= filter_var(trim($_POST["nombre"]), FILTER_SANITIZE_STRING);
$contraseñaU= filter_var(trim($_POST["contraseña"]), FILTER_SANITIZE_STRING);
$contraseñaUr= filter_var(trim($_POST["repetir"]), FILTER_SANITIZE_STRING);
$Correo= filter_var(trim($_POST["correo"]), FILTER_SANITIZE_STRING);
$id_libro = "";//vacio
if ($contraseñaU==$contraseñaUr) {
    $Password= md5($contraseñaU);
} else {
    echo "<p>Contraseñas DIF iguales</p>";
}

$res=insertarUsuario($conn, $Nombre, $Correo, $Password);
/*esta el archivo en xamp

*/
echo $res;
/* gestion inicio*/


// Si se ha enviado el formulario

?>
    </form>
</body>
</html>

