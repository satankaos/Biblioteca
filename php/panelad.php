<!doctype html>
<html lang="es">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" type="text/css" href="../source/css/bootstrap.min.css">



  <!-- Bootstrap CSS v5.2.1 -->
  


</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
<h1 > Eres admin</h1>
  </main>
  <?php
// Conectar a la base de datos
require("conexion.php");
$conn = $db = conect();

// Verificar la conexión
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}

// Escribir la consulta SQL
$sql = "SELECT * FROM usuario";

// Ejecutar la consulta
$result = mysqli_query($conn, $sql);

// Verificar si la consulta tiene resultados
if (mysqli_num_rows($result) > 0) {
    // Mostrar los resultados en una tabla HTML
    echo "<table class= \"table table-dark table-striped\">";
    echo "<tr>";
    echo "<th> <a class=\"btn btn-primary \" href=\"../php/homeAd.php\" aria-current=\"page\">ver usuario</a></th>";
    echo "<th> <a class=\"btn btn-primary \" href=\"../source/carrito.php\" aria-current=\"page\">ver carro</a></th>";
    echo "<th> <a class=\"btn btn-primary \" href=\"../php/verLibros.php\" aria-current=\"page\">ver libros</a></th>";
    echo "<th> <a class=\"btn btn-primary \" href=\"../source/carrito.php\" aria-current=\"page\">agregar libos libros</a></th>";
 
    echo "<th>contraseña</th>";
    echo "</tr>";
    

   
    echo "</table>";
  }
  desconexion($db);
    ?>
 
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>
</html>