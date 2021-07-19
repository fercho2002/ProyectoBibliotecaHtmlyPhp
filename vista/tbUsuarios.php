<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historial Usuarios</title>
    <link href="../boodstrap/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/generales.css">
</head>
<body>

<content>

      <form id="generaltablasEx" >	 	
      
      <a href="principal.php" class="btn btn-success" style="position:absolute; top:20px; right:20px;">volver a inicio</a>
          <div id="diviz" class="divs">
          <div class="divgenerales" id="div1">
              <label class="labelgeneralesultimo">Id Usuario</label>
              <input  id="input1" class="inputgenerales " type="text"  name="fidUsuario">
          </div>
          <div >
                <button type="submit" class="btn btn-warning botones " name="fboton" value="buscar" style="margin: 10px 20px;" onclick="document.location.reload();">Buscar</button>
          </div >
          <label class="labelgeneralestablas  ">Libros Prestados</label>
            <table class="table">
  <thead>
    <tr>
      <th scope="col">Fecha De Prestamo</th>
      <th scope="col">Fecha De Entregado</th>
      <th scope="col">Actualmente</th>
      <th scope="col">Nombre Libro</th>
      <th scope="col">Id Libro</th>
      <th scope="col">Estado</th>
      <th scope="col">Observacion</th>
      <th scope="col">Retarzo</th>
      
      
    </tr>
  </thead>
  <tbody>
      
    <tr>
     
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    
   
  </tbody>
</table>  
<label class="labelgeneralestablas  ">computadores Prestados</label>
            <table class="table">
  <thead>
    <tr>
      
      <th scope="col">Fecha De Prestamo</th>
      <th scope="col">Fecha De Entregado</th>
      <th scope="col">Actualmente</th>
      <th scope="col">Marca</th>
      <th scope="col">Serial</th>
      <th scope="col">Modelo</th>
      <th scope="col">Estado</th>
      <th scope="col">Observacion</th>
      <th scope="col">Retarzo</th>
    </tr>
  </thead>
  <tbody>
     
    <tr>
     
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    
   
  </tbody>
</table>  
          </div>

          
</form>
  </content>  
  <script src="../boodstrap/bootstrap.bundle.js"></script>

</body>
</html>