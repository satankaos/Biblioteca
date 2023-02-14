<?php 
session_start();
include("../../php/conexion.php");
$conn=conect();
if(!empty($_POST)){
$q1 = $conn->query("insert into carrito(client_email,created_at) value(\"$_POST[email]\",NOW())");
if($q1){
$cart_id = $conn->insert_id;
foreach($_SESSION["cart"] as $c){
//$q1 = $conn->query("insert into carrito_libros(product_id,q,cart_id) value($c[product_id],$c[q],$cart_id)");
$q1 = $conn->query("INSERT INTO carrito_libros (product_id,q,cart_id) VALUES ($c[product_id],$c[q],$cart_id)");
}
unset($_SESSION["cart"]);
}
}
print "<script>alert('Venta procesada exitosamente');window.location='../productos.php';</script>";
desconexion($conn);
session_destroy();
?>