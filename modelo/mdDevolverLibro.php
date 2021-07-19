<?php

session_start();

    class mdDevolverLibro {
        private $conexion ;
        private $idLibro;
        private $nombreLibro;
        private $idUsuario;
        private $fechaDePrestamo;
        private $fechaDeEntregado;
        private $observacion;
        private $comoVa;
        
        $_SESSION['nombre']='pedro';

        function __construct($co,$idLi,$idUs,$ob){

            $this->conexion = $co;
            $this->idLibro = $idLi;
            $this->idUsuario = $idUs;
            $this->observacion = $ob;

        }

        function seleccionar(){
            
            $prestado = "prestado";
            $estado = mysqli_query($this->conexion,"SELECT nombrelibro,fechadeprestamo,fechadeentregado FROM librospre WHERE idusuariopre = '$this->idUsuario' and idlibro = '$this->idLibro' and actualmente = '$prestado' ");
            if(mysqli_num_rows($seleccionar)){
                
                $unlibro = mysqli_fetch_array($estado);
                $this->nombreLibro = $unlibro["nombrelibro"];
                $this->fechaDePrestamo = $unlibro["fechadeprestamo"];
                $this->fechaDeEntregado = $unlibro["fechadeentregado"]
                $this->comoVa = "seleccionlisto";
                
                $_SESSION['nombre']=$this->nombreLibro;
                $_SESSION['fechap']=$this->fechaDePrestamo;
                $_SESSION['fechae']=$this->fechaDeEntregado;
                return $this->comoVa;
            }
            
            else{
                $this->comoVa = "seleccionmal";
                return $this->comoVa;
            
            }
        }
    }
?>