<?php
if (isset($_POST['login'])){
    //$correo_destino=$_POST['email'];
    //$asunto=' Compra de libros satisfactoria ';
    //$mensaje='su compra se ha realizado satisfactoriamente no responda al mensaje';
    //mail($correo_destino, $asunto, $mensaje);
    echo '<h1>Pago realizado</h1>'.'<h3>Correo enviado</h3>';
}else{
echo 'mal';
}
?>