<?php 

 class Conectar {
    function conectarbd(){
        $conexion =mysqli_connect("localhost","root","","proyectosenabiblioteca");
        mysqli_query($conexion, "SET NAMES 'utf8' ");
        return $conexion;
      }
      function desconectar($conexion){
        mysqli_close($conexion);
      }
 }
?>