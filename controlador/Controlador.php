<?php
    $ingreso = $_POST["fboton"];
    include_once("../modelo/Conectar.php");
    $objeto = new Conectar();
    $conexion = $objeto->conectarbd();
    //verifica que el boton sea el de ingresar
    if($ingreso=='ingresar'){
        $nik = $_POST["femail"];
        $pass = $_POST["fcontraseña"];
        $ro = "bibliotecario";

        include_once("../modelo/loguin.php");
        $modelo = new loguin($conexion,$ro,$nik,$pass);
        $id = $modelo->verificar();
        if($id > 0){
            header("location:../vista/principal.php");   
        }
        else{
            header("location:../vista/loguin.php?mensaje=incorrecto");
        }
    }
?>