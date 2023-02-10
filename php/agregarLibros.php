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
    <!-- 
Titulo	
Autor	
Editorial	
Fecha_publicacion	
Genero	
Precio	
Imagen	
Descripción -->
<form action="../php/ProcesarNuevosLibros.php" method="post">
    <p>nombre <input type="text" name="Titulo" required></p>
    <p>Usuario/Correo <input type="text" name="Autor" required></p>
    <p>contraseña <input type="text" name="Editorial" required></p>
    <p>repetir <input type="date" name="Fecha_publicacion" required></p>
    <p>repetir <input type="text" name="Genero" required></p>
    <p>repetir <input type="number" name="Precio" required></p>
    <p>repetir <input type="text" name="imagen" required></p>
    
 <button type="submit">enviar</button>  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>