<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    session_start();
    @$estado = $_SESSION["estado"];
    if($estado=="si"){
        header("location:../ProyectoBibliotecaHtml/vista/principal.php");  
    }
    else{
             header("location:../ProyectoBibliotecaHtml/vista/loguin.php");   

    }
    ?>  
</body>
</html>