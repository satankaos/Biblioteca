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

 
 <form action="../php/ProcesarNuevosLibros.php" method="post">

  <div class="mb-3">
    <input type="text" name="Titulo" placeholder="Titulo" required>
  </div>
    <div class="mb-3">
    <input type="text" name="Autor" placeholder="Autor"  required>
    </div>
    <div class="mb-3">
    <input type="text" name="Editorial" placeholder="Editorial"  required>
    </div><div class="mb-3">
    <p>fecha publicaccion</p><input type="date" name="Fecha_publicacion" placeholder="Fecha Publicacion"  required>
    </div><div class="mb-3">
    <input type="text" name="Genero" placeholder="Genero"  required>
    </div><div class="mb-3">
    <input type="number" name="Precio" placeholder="Precio"  required>
    </div><div class="mb-3">
    <input type="text" name="Descripción" placeholder="Descripción"  required>
    </div>
 <button type="submit" class="btn btn-info">enviar</button>    
 <a class="btn btn-primary " href="panelad.php" aria-current="page">volver</a>
    </form>
   
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>