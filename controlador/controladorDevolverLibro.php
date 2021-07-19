<?php

    
    $boton = $_POST["fboton"];

    include_once("../modelo/Conectar.php");
    $conexion = new Conectar();
    $conexionbd = $conexion->conectarbd();

    if($boton == "buscar"){
        $idU = $_POST["fidUsuario"];
        $idl = $_POST["fidLibro"];
        $ob = $_POST["fobservacion"];
        include_once("../modelo/mdDevolverLibro.php");
        $modelo = new mdDevolverLibro($conexionbd,$idl,$idU,$ob);
        $buscar = $modelo->seleccionar();
        $nombre = $modelo->getnombrelibro();
        $fechapre = $modelo->getfechaDePrestamo();
        $fechaen = $modelo->getfechaDeEntregado();
        header("location:../vista/devolverLibro.php?nombre=$nombre &  fechapre=$fechapre  & fechaen=$fechaen");
    }
?>