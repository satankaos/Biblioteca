<?php
    function conectar(){
        $user = "root";
        $pass="";
        $server="localhost";
        $db="libros_bd";
        $con= mysqli_connect($server, $user, $pass, $db) or die("Error al conectar. ". mysqli_error());
        return $con;
    }
    function desconectar($mysql){
        return mysqli_close($mysql);
    }
    function insertar($query) {
        // Si hubiese mas de un usuario a la vez. Se hace en todos.
        // $con = conectar();
        // desconectar($con)
    }
    function delete($query) {
    }
    function update($query) {
    }
    function select($query) {
    }
?>