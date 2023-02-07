<?php
include("C:/xampp/htdocs/Biblioteca/conexion.php");
session_start();

$servername = "localhost";
    $database = "libros_bd";
    $username = "admin";
    $password = "21232f297a57a5a743894a0e4a801fc3";

 $db =conect($servername, $username, $password, $database);
// Conexión a la base de datos

 
$errors = [];
session_destroy()
?>

<!DOCTYPE html>
<html>
<head>
  <title>Inicio de sesión</title>
</head>
<body>
  <div class="container">
    <div class="d-flex min-vh-100">
      <div class="row d-flex flex-grow-1 justify-content-center align-items-center">
        <div class="col-md-4 form login-form">
          <form action="ProcesoInicio.php" method="POST" autocomplete="off">
            <h2 class="text-center">Inicio de sesión</h2>
              
              <?php
              if (count($errors) > 0) {
                echo "<div class='alert alert-danger' role='alert'>";
                foreach ($errors as $error) {
                    echo $error . "<br>";
                }
                echo "</div>";
              }
              ?>
          
              <div class="form-group mb-3">
                  <input type="text" name="usuario" class="form-control" placeholder="usuario" required>
              </div>
              <div class="form-group mb-3">
                  <input type="password" name="contraseña" class="form-control" placeholder="Contraseña" required>
              </div>
              <div class="form-group mb-3">
                  <input type="submit" name="login_button" class="form-control btn btn-primary" value="Acceder">
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>  
</body>
</html>