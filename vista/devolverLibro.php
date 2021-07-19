<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Devolver Libro </title>
    <link href="../boodstrap/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/generales.css">
</head>
<body>
<content>

      <form id="general" >	 	
      
      <a href="principal.php" class="btn btn-success" style="position:absolute; top:20px; right:20px;">volver a inicio</a>
          <div id="diviz" class="divs">
            <div class="divgenerales" id="div1">
              <label class="labelgenerales  ">Identificacion </label>
              <input  id="input1" class="inputgenerales " type="text"  placeholder="id Usuario" name="fidUsuario">
          </div>
          <div class="divgenerales" id="div2">
              <label class="labelgenerales  ">Id Libro </label>
              <input  id="input2" class="inputgenerales" type="text"  placeholder="idLibro" name="fidLibro">
          </div>
          <div >
                <button type="submit" class="btn btn-warning botones " name="fboton" value="buscar" style="margin: 10px 20px;">Buscar</button>
            </div >

           
            
             
          <div class="divgenerales" id="div3">
              <label class="labelgenerales">nombreLibro</label>
             <input  id="input3" class="inputgenerales" type="text"  placeholder="identificacion" name="fnombre" >
          </div>
  
          <div class="divgenerales" id="div5">
              <label class="labelgenerales">Fecha De Prestamo</label>
              <input  id="input5" class="inputgenerales" type="text"  placeholder="id" name="ffechaDePrestamo " value="" >
          </div>
          <div class="divgenerales" id="div6">
             <label class="labelgenerales">Fecha De Entrega</label>
             <input  id="input5" class="inputgenerales" type="text"  placeholder="id" name="ffechaDeEntrega" value="" >
          </div>
            
          <hr  width=100% size=5   color="#ff9900" >
          <div class="divgenerales" id="div7">
              <label class="labelgenerales">Observacion:</label>
          </div>
          <div class="divv" id="div8">
              <input  id="input5" class="inputt" type="text"  placeholder="" name="fobservacion" >
              <label class="labell">Al devolver El Libro pasara a disponible</label>
          </div>
          </div>
         
            <div >
                <button type="submit" class="btn btn-warning botones " name="fboton" value="limpiar" style="margin: 10px 20px; width:120px;">limpiar</button>
            
                <button type="submit" class="btn btn-warning botones " name="fboton" value="devolver" style="margin: 10px 20px; width: 120px;">devolver</button>
            </div>
          </div>
          <?php
                    @$mensaje = $_GET['mensaje'];
                    if (isset($mensaje)){
                    if($mensaje=='insertado'){
                            echo '<div  class="alert alert-success" role="alert"> insertado Correctamente</div>';
                        }
                    if($mensaje=='noinsertado'){
                            echo '<div  class="alert alert-danger" role="alert">error al insertar</div>';
                        }

                    }
                    ?>
</form>
  </content>  
  <script src="../boodstrap/bootstrap.bundle.js"></script>

</body>
</html>