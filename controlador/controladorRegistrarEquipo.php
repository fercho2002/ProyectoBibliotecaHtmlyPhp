<?php
   $boton =  $_POST["fboton"];
    include_once("../modelo/Conectar.php");
    $objeto = new Conectar();
    $conexion = $objeto->conectarbd();

    if($boton == "registrar"){
        $marca = $_POST["fmarca"];
        $serial = $_POST["fserial"];
        $modelo = $_POST["fmodelo"];
        $estado = $_POST["festado"];
        $observacion = $_POST["fobservacion"]; 
        include_once("../modelo/mdRegistrarComputador.php");

        $modelo = new mdRegistrarComputador($conexion,$marca,$serial,$modelo,$estado,$observacion);
        $estado = $modelo->insertar();
        if($estado == true){
            header("location:../vista/RegistrarComputador.php?mensaje=insertado");
        }
        else{
            header("location:../vista/RegistrarComputador.php?mensaje=noinsertado");
        }
    }
?>