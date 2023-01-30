<?php
function conect($servername, $username, $password, $database)
{
 
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database) or die ("Connection failed: " . mysqli_connect_error());
    // Check connection
    return $conn;
    
}
function desconexion($conn){mysqli_close($conn);}
function insertarLibro( $conn,$Titulo, $Autor,$Editorial,$Fecha_publicacion, $Genero, $Precio, $Imagen, $Descripción)
{
    $stmt = $conn->prepare("INSERT INTO `libros` (`Titulo`, `Autor`, `Editorial`, `Fecha_publicacion`, `Genero`, `Precio`, `Imagen`, `Descripción`) VALUES (,?, ?, ?, ?, ?, ?, ?,?)");

$stmt->bind_param($Titulo, $Autor,$Editorial,$Fecha_publicacion, $Genero, $Precio, $Imagen, $Descripción);
if ($stmt->execute()) {

    $txt= "Producto agregado al carrito";
    
    } else {
    
     $txt="Error: " . $stmt->error;
    
    }
   
   
    return $txt;
    
}   

function insertarUsuario($conn,$Nombre, $Correo, $Password, $id_libro){
    $stmt = $conn->prepare(" INSERT INTO `usuario` (`Nombre`, `Correo`, `Password`) VALUES (?,?,?)");
    $stmt->bind_param($Nombre, $Correo, $Password, $id_libro);
if ($stmt->execute()) {

    $txt= "Producto agregado al carrito";
    
    } else {
    
     $txt="Error: " . $stmt->error;
    
    }
   
   
    return $txt;
}//sacar id libro de tabla libros
function insertarCarro($conn,$libros, $id_carrito, $correo, $total, $id_usuario, $id_libro){//tienes que sacar el id de usuario de la tabala usuario y el id de libro de libros y el nombre del libro 
    $stmt = $conn->prepare("INSERT INTO `carrito` (`libros`, `id_carrito`, `correo`, `total`, `id_usuario`, `id_libro`) VALUES (?,? ,? ,? ,?,?)");
    $stmt->bind_param($libros, $id_carrito, $correo, $total, $id_usuario, $id_libro);
if ($stmt->execute()) {

    $txt= "Producto agregado al carrito";
    
    } else {
    
     $txt="Error: " . $stmt->error;
    
    }
   
   
    return $txt;
}

 function borrarCarro($id_carrito,$servername, $username, $password, $database){

    

    if (isset($id_carrito)) {
        $conn = conexion($servername, $username, $password, $database);
        
        $borrar = "DELETE FROM carrito WHERE `carrito`.`Id_carrito` = $id_carrito";

        $ejecutar = sqlsrv_query($conn, $borrar);
        if ($ejecutar) {
            return "<script>alert('Ha sido Borrado')</script>";
        }
    }






 }   
?>