        <?php
        session_start();
        if (isset($_POST['login'])) {
            require("conexion.php");
            $con = conect();
            if(!$_POST['username'] == '' && !$_POST['password'] == ''){
                $username = $_POST['username'];
                echo $username;
                $password = $_POST['password'];
                $sql = "SELECT * FROM usuarios where Nombre = '".$username."'";
                $resultado = $con->query($sql);
                if(!$resultado) {
                    echo '<p class="error">Username password combination is wrong!</p>';
                } else {
                    $rows = mysqli_fetch_assoc($resultado);
                    echo $rows;
                        if (!empty($rows) && md5($password) == $rows['Password']) {
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