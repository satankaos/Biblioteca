<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" src="../source/css/registro.css">
    <title>Inicio de sesión</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <!-- <form action="Vregistro.php" method="post">
    <p>nombre <input type="text" name="nombre" required></p>
    <p>Usuario/Correo <input type="text" name="correo" required></p>
    <p>contraseña <input type="password" name="contraseña" required></p>
    <p>repetir <input type="password" name="repetir" required></p>    
 <button type="submit">enviar</button>    
    </form> -->

    <div class="container fluid">
    <div class="row">
        <div class="offset-md-2 col-lg-5 col-md-7 offset-lg-4 offset-md-3">
            <div class="panel border bg-white">
                <div class="panel-heading">
                    <h3 class="pt-3 font-weight-bold">Login</h3>
                </div>
                <div class="panel-body p-3">
                    <form action="Vregistro.php" method="POST">
                        <div class="form-group py-2">
                            <div class="input-field"> <span class="far fa-user p-2"></span> <input type="text" placeholder="nombre"name="nombre" required> </div>
                        </div>
                        <div class="form-group py-1 pb-2">
                        <div class="form-group py-2">
                            <div class="input-field"> <span class="far fa-user p-2"></span> <input type="text" placeholder="correo" required name="correo"> </div>
                        </div>
                        <div class="form-group py-1 pb-2">
                            <div class="input-field"> <span class="fas fa-lock px-2"></span> <input type="password" placeholder="contraseña" name="contraseña" required> <button class="btn bg-white text-muted"> <span class="far fa-eye-slash"></span> </button> </div>
                        </div>
                        <div class="form-group py-1 pb-2">
                            <div class="input-field"> <span class="fas fa-lock px-2"></span> <input type="password" placeholder="repetir contraseña" name="repetir" required> <button class="btn bg-white text-muted"> <span class="far fa-eye-slash"></span> </button> </div>
                        </div>
                        <div class="form-inline"> <input type="checkbox" name="remember" id="remember"> <label for="remember" class="text-muted">Remember me</label> <a href="#" id="forgot" class="font-weight-bold">Forgot password?</a> </div>
                        <div ><button class="btn btn-primary btn-block mt-3" type="submit">enviar</button></div>
                        <div class="text-center pt-4 text-muted">volver atras <a href="../php/index.php">Sign up</a> </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</div>
</body>
</html> 
