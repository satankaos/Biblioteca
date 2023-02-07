<?php
include("C:/xampp/htdocs/Biblioteca/conexion.php");
session_start();

$servername = "localhost";
    $database = "libros_bd";
    $username = "admin";
    $password = "21232f297a57a5a743894a0e4a801fc3";

 $db =conect($servername, $username, $password, $database);
// Conexión a la base de datos

if (isset($_POST['login_button'])) {
    $username = mysqli_real_escape_string($db, $_POST['usuario']);
    $password = mysqli_real_escape_string($db, $_POST['contraseña']);
   
    // Comprobar si el nombre de usuario es válido
    $query = "SELECT * FROM `usuario` WHERE Correo='$username';";
    $results = mysqli_query($db, $query);
   


 
    if($results==true){
 
      header('Location:home.html');
     
    }else{
     
      echo '<script language="javascript">alert("El Usuario/Contraseña no es correcto,intente de nuevo");</script>';
     
    }



    if (mysqli_num_rows($results) == 1) {
      // Nombre de usuario válido, verificar contraseña
  
      $row = mysqli_fetch_assoc($results);
      if (password_verify(md5($password), $row['contraseña'])) {
        // Inicio de sesión válido
      
        $_SESSION['username'] = $username;
        header('Location: home.html');
      } else {
        // Contraseña inválida
        $errors[] = "Nombre de usuario/contraseña inválidos";
      }
    } else {
      // Nombre de usuario inválido
      $errors[] = "Nombre de usuario/contraseña inválidos";
    }
  }
  session_destroy()
?>
