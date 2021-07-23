<?php

$boton  = $_POST["fboton"];

include_once("../modelo/Conectar.php");
$conexion = new Conectar();
$conexionbd = $conexion->conectarbd();

if($boton == "buscar"){

    $au = $_POST["fautor"];
    include_once("../modelo/mdBuscarAutor.php");
    $modelo = new mdBuscarAutor($conexionbd,$au);
    $lib = $modelo->autor();
    $libro = serialize($lib);
    header("location:../vista/buscarLibroAutor.php?libro=$libro" );
    
  

    
}

?>