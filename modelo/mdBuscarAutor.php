<?php

    class mdBuscarAutor{
        private $autor ;
        private $conexion ;
        
        function __construct($con,$au){

            $this->conexion = $con;
            $this->autor = $au;

        }

        function autor(){
            $disponible = "disponible";
            $nulo = "";
            $aut = mysqli_query($this->conexion,"SELECT idlibro,nombrelibro,genero,estado,observacion FROM libros where actualmente = '$disponible' and nombrelibro != '$nulo' and autor = '$this->autor' ");
            $autor = $aut->fetch_all();
            return $autor;
        }
    }

?>