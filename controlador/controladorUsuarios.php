<?php 
    $boton  = $_POST["fboton"];

    include_once("../modelo/Conectar.php");
    $conexion = new Conectar();
    $conexionbd = $conexion->conectarbd();

    if($boton == "buscar"){
        $id = $_POST["fid"];
        include_once("../modelo/mdBuscarUsuarios.php");
        $modelo = new mdBuscarUsuarios($conexionbd,$id);
        $libro = $modelo->libro();
        $libro = serialize($libro);
        $libro = urlencode($libro);
        $computador = $modelo->computador();
        $computador = serialize($computador);
        $computador = urlencode($computador);
        header("location:../vista/tbUsuarios.php?libro=$libro &  computador=$computador & id=$id " );
        
    }
?>