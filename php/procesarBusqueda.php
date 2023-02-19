<!doctype html>
<html lang="en">

<head>
  <title>Title</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>

<?php
require("conexion.php");
$conn = $db = conect();
$i=$_POST['select'];
$titulo=$_POST['Titulo'];
$Autor=$_POST['Autor'];
$Genero=$_POST['Autor'];
$Editorial=$_POST['Editorial'];

     if ($i==0) {
        $sql='SELECT *  FROM libros';
     }elseif ($i==1) {
       
        $sql='SELECT * FROM libros where titulo like "'.$titulo.'" ';
     }elseif ($i==2) {
        
        $sql='SELECT * FROM libros where autor like"'.$Autor.'" ';

     }elseif ($i==3) {
        $sql='SELECT * FROM libros where genero like "'.$Genero.'" ';
     }elseif ($i==4) {
        $sql='SELECT * FROM libros where editorial like "'.$Editorial.'" ';
     }

     

  


// Ejecutar la consulta
$result = mysqli_query($conn, $sql);

// Verificar si la consulta tiene resultados
if (mysqli_num_rows($result) > 0) {
    // Mostrar los resultados en una tabla HTML
    echo "<table class= \"table table-dark table-striped\">";
    echo "<tr>";
    echo "<th>Id</th>";
    echo "<th>Titulo</th>";
    echo "<th>Autor</th>";
    echo "<th>Editorial</th>";
    echo "<th>Fecha Publicacion</th>";
    echo "<th>Genero</th>";
    echo "<th>Precio</th>";
    echo "<th>Descripcion</th>";
    echo "</tr>";
    
 
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["Titulo"] . "</td>";
        echo "<td>" . $row["Autor"] . "</td>";
        echo "<td>" . $row["Editorial"] . "</td>";
        echo "<td>" . $row["Fecha_publicacion"] . "</td>";
        echo "<td>" . $row["Genero"] . "</td>";
        echo "<td>" . $row["Precio"] . "</td>";
        echo "<td>" . $row["Descripción"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
  }
  echo "<th> <a class=\"btn btn-primary \" href=\"home.php\" aria-current=\"page\">volver</a></th>";
  desconexion($db);
    ?>

</main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>