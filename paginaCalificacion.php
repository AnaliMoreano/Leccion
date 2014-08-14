

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Leccion</title>

    
    <link href="bootstrap.css" rel="stylesheet">    
<body>

<h1>Notas</h1>
</br>
  
<div class="col-md-12">

<table class ="table-bordered" >

  
   <tr>
     
     <td width="157" align="center"><Strong>Nombre</td>
     <td width="157" align="center"><Strong>Parcial</td>
     <td width="157" align="center"><Strong>Final</td>
     <td width="157" align="center"><Strong>Mejoramiento</td>
     <td width="157" align="center"><Strong>Promedio</td>
   
   </tr>


<?php
include_once("CalificacionCollector.php");

$CalificacionCollectorObj = new CalificacionCollector();

foreach ($CalificacionCollectorObj->showCalificacion() as $c){
  echo '<tr>';
 
  echo '<td width="157" align="center">'. $c->getnombre().'</td>';
  
  echo '<td width="157" align="center">'. $c->getparcial().'</td>';
  
  echo '<td width="157" align="center">'. $c->getFinal().'</td>';
  
  echo '<td width="157" align="center">'. $c->getmejoramiento().'</td>';
  
  echo '<td width="157" align="center">'. $c->getnotaPromedio().'</td>';
  echo '<tr>';
}
?>

</table>
 </div>
  </body>

</html>
