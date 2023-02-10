<?php
/*
* Este archio muestra los productos en una tabla.
*/
session_start();
include("..\php\conexion.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="../source/css/bootstrap.min.css">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Productos</h1>
			<a href="./carrito.php" class="btn btn-warning">Ver Carrito</a>
			<a href="./index.php" class="btn btn-warning">Cancelar</a>
			<br><br>
<?php
/*
* Esta es la consula para obtener todos los productos de la base de datos.
*/
$db=conect();
$products = $db->query("SELECT * FROM libros");
?>
<table class="table table-dark table-striped">
<thead>
	
	<th>Titulo</th>
	<th>Autor</th>
	<th>Editorial</th>
	<th>Fecha_publicacion</th>
	<th>Genero</th>
	<th>Precio</th>
	<th></th>
</thead>
<?php 
/*
* Apartir de aqui hacemos el recorrido de los productos obtenidos y los reflejamos en una tabla.
*/
while($r=$products->fetch_object()):?>
<tr>
	<td><?php echo $r->Titulo;?></td>
	<td> <?php echo $r->Autor; ?></td>
	<td> <?php echo $r->Editorial; ?></td>
	<td> <?php echo $r->Fecha_publicacion; ?></td>
	<td> <?php echo $r->Genero; ?></td>
	<td> <?php echo $r->Precio; ?></td>
	<td style="width:260px;">
	<?php
	$found = false;

	if(isset($_SESSION["cart"])){ foreach ($_SESSION["cart"] as $c) { if($c["product_id"]==$r->id){ $found=true; break; }}}
	?>
	<?php if($found):?>
		<a href="carrito.php" class="btn btn-info">Agregado</a>
	<?php else:?>
	<form class="form-inline" method="post" action="/phpc/addCarrito.php">
	<input type="hidden" name="product_id" value="<?php echo $r->id; ?>">
	  <div class="form-group">
	    <input type="number" name="q" value="1" style="width:100px;" min="1" class="form-control" placeholder="Cantidad">
	  </div>
	  <button type="submit" class="btn btn-primary">Agregar al carrito</button>
	</form>	
	<?php endif; ?>
	</td>
</tr>
<?php endwhile; ?>
</table>

		</div>
	</div>
</div>
</body>
</html>