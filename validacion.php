        <?php
        session_start();
        if (isset($_POST['login_button'])) {
            require("conexion.php");
            $con = conect();
            if(!$_POST['usuario'] == '' && !$_POST['contraseña'] == ''){
                $usuario = $_POST['usuario'];
                echo $usuario;
                

                $contraseña = $_POST['contraseña'];
                $sql = "SELECT * FROM usuario where Correo = '".$usuario."'";
                $resultado = $con->query($sql);
                if(!$resultado) {
                    echo '<p class="error">Username contraseña combination is wrong!</p>';
                } else {
                    $rows = mysqli_fetch_assoc($resultado);
                    echo $rows;
                        if (!empty($rows)) {
                            $_SESSION['user_id'] = $rows['id'];
                            $_SESSION['user_name'] = $rows['Nombre'];
                            //echo '<p class="success">Congratulations, you are logged in!</p>';
                            header('Location: home.php');
                        } else {
                            //echo '<p class="error">Password combination is wrong!</p>';
                            echo '<p class="error">Password combination is wrong!</p>';
                        }
                    
                }
            }else{
                echo '<p class="error">Username Password combination is empty!</p>';
            }
        }
        if (isset($_POST['register'])){
            header('Location: formularioRegistro.php');
        }
    ?>