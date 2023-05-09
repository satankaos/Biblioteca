<?php
include("..\php\conexion.php");
session_start();

$servername = "localhost";
    $database = "libros_bd";
    $username = "admin";
    $password = "21232f297a57a5a743894a0e4a801fc3";

 $db =conect();
// Conexión a la base de datos

 
$errors = [];
session_destroy()
?>

<!DOCTYPE html>
<html>
<head>
  <title>Inicio de sesión</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <link rel="stylesheet" src="../source/css/loging.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<img class="image" src="../php/img/logo.png" alt="" width="200px" height="200px">

  

  <div class="container-fluid " style="background-image: url('/php/img/487483.jpg');
            height: 100vh">
    <div class="d-flex min-vh-75">
      <div class="row d-flex flex-grow-1 justify-content-center align-items-center">
        <div class=" container col-md-4 form login-form">
          <!-- <form action="ProcesoInicio.php" method="POST" autocomplete="off"> -->
          <form class='border border-primary rounded' action="ProcesoInicio.php" method="POST" autocomplete="off">
          <div class="justify-content-center align-items-center move">
            <img class="mx-auto d-block" src="../php/img/logo.png" alt="" width="200px" height="200px">
          </div>
            <h2 class="text-center">Inicio de sesión</h2>
              <div class="form-group mb-3">
                  <input type="text" name="usuario" class="form-control" placeholder="usuario" required>
              </div>
              <div class="form-group mb-3">
                  <input type="password" name="contraseña" class="form-control" placeholder="Contraseña" required>
              </div>
              <div class="form-group mb-1">
                  <input type="submit" name="login_button" class="form-control btn btn-primary" value="Acceder">
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>  
</body>
</html>