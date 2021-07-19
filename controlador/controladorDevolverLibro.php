<?php
    $boton = $_POST["fboton"];

    include_once("../modelo/Conectar.php");
    $conexion = new Conectar();
    $conexionbd = $conexion->conectarbd();

    if($boton == "buscar"){
        $idU = $_POST["fidUsuario"];
        $idl = $_POST["fidLibro"];
        $ob = $_POST["fobservacion"];
        include_once("../modelo/mdDevolverLibro");
        $modelo = new mdDevolverLibro($conexionbd,$idl,$idU,$ob);
        $buscar = $modelo->seleccionar();
    }
?>