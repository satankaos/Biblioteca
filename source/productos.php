<?php
/*
* Este archio muestra los productos en una tabla.
*/
session_start();
include "../php/conexion.php";
 $conn=conect();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1>Libros</h1>
			<a href="./carrito.php" class="btn btn-warning">Ver Carrito</a>
			<a href="./../php/home.php" class="btn btn-warning">Atras</a>
			<br><br>
<?php
/*
* Esta es la consula para obtener todos los productos de la base de datos.
*/
$products = $conn->query("SELECT * FROM libros");
?>
<table class="table table-bordered">
<thead>
	<th>libro</th>
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
	<td>$ <?php echo $r->Precio; ?></td>
	<td style="width:260px;">
	<?php
	$found = false;

	if(isset($_SESSION["cart"])){ foreach ($_SESSION["cart"] as $c) { if($c["product_id"]==$r->id){ $found=true; break; }}}
	?>
	<?php if($found):?>
		<a href="carrito.php" class="btn btn-info">Agregado</a>
	<?php else:?>
	<form class="form-inline" method="post" action="./phpc/addCarrito.php">
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
<?php
/*
* Este archio muestra los productos en una tabla.
*/

desconexion($conn);
?>
</html>