<?php

$nombre = $_POST['Nombre'];

if (filter_has_var(INPUT_POST, "Nombre")){
  $Nombre = filter_input(INPUT_POST, "Nombre");
  print "Nombre: $Nombre<br>";
} 


if (filter_has_var(INPUT_POST, "Parcial")){
  $Parcial = filter_input(INPUT_POST, "Parcial");
  print "Parcial: $Parcial<br>";
} 

if (filter_has_var(INPUT_POST, "Final")){
  $Final = filter_input(INPUT_POST, "Final");
  print "Final: $Final<br>";
} 

if (filter_has_var(INPUT_POST, "Mejoramiento")){
  $Mejoramiento = filter_input(INPUT_POST, "Mejoramiento");
  print "Mejoramiento: $Mejoramiento<br>";
} 
  

?>
