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
  <form action="eliminarCarro.php" method="POST" autocomplete="off">
            <h2 class="text-center">eliminar carro</h2>
              <div class="form-group mb-3">
                  <input type="number" name="id" class="form-control" placeholder="id carro" required>
              </div>
              
                  <input type="submit" name="button_eliminar" class="form-control btn btn-primary" value="Eliminar">
  
  <?php
// Conectar a la base de datos
require("conexion.php");
$conn = $db = conect();

// Verificar la conexión
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}

// Escribir la consulta SQL
$sql = "SELECT * FROM carrito";
$sql1 = "SELECT * FROM carrito_libros";

// Ejecutar la consulta
$result = mysqli_query($conn, $sql);
$result1 = mysqli_query($conn, $sql1);

// Verificar si la consulta tiene resultados
if (mysqli_num_rows($result) > 0) {
    // Mostrar los resultados en una tabla HTML
    echo "<table class= \"table table-dark table-striped\">";
    echo "<tr>";
    echo "<th>id carro</th>";
    echo "<th>Mail Cliente</th>";
    echo "<th>fecha</th>";
   
    echo "</tr>";
    

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["client_email"] . "</td>";
        echo "<td>" . $row["created_at"] . "</td>";
        
        echo "</tr>";
    }
    echo "</table>";
  }


  if (mysqli_num_rows($result1) > 0) {
    // Mostrar los resultados en una tabla HTML
    echo "<table class= \"table table-dark table-striped\">";
    echo "<tr>";
    echo "<th>id </th>";
    echo "<th>cantidad</th>";
    echo "<th>id producto</th>";
    echo "<th>id carro</th>";

    echo "</tr>";
    

    while ($row1 = mysqli_fetch_assoc($result1)) {
        echo "<tr>";
        echo "<td>" . $row1["id"] . "</td>";
        echo "<td>" . $row1["q"] . "</td>";
        echo "<td>" . $row1["product_id"] . "</td>";
        echo "<td>" . $row1["cart_id"] ."</td>";
        
        echo "</tr>";
    }
    echo "</table>";
  }

  echo "<th> <a class=\"btn btn-primary \" href=\"panelad.php\" aria-current=\"page\">volver</a></th>";

  desconexion($db);
    ?>
 
  <!-- Bootstrap JavaScript 
-->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>
</html>