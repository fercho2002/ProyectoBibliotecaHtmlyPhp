<?php
    class mdBuscarUsuarios{

        private $id ;
        private $con ;

        function __construct($cone,$idU){
            $this->con = $cone;
            $this->id = $idU;
        }

        function libro(){
            $nulo = "";
            $libro = mysqli_query($this->con,"SELECT idlibro,nombrelibro,fechadeprestamo,fechadeentregado,actualmente,estado,observacion,retrazo FROM librospre where idusuariopre = '$this->id' and idlibro != '$nulo' ");
            return $libro;
        }

        function computador(){
            $nulo = "";
            $computador = mysqli_query($this->con,"SELECT marca,modelo,serialequipo,fechadeprestamo,fechadeentregado,actualmente,estado,observacion,retrazo FROM computadorespre where idusuariopre = '$this->id' and marca != '$nulo' ");
            return $computador;
        }





    }

  
?>