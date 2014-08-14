<?php

class Calificacion
{
    private $idCalificacion;
    private $nombre;
    private $parcial;
    private $Final;
    private $mejoramiento;
    private $notaPromedio;
    
    

     function __construct($idCalificacion, $nombre, $parcial, $Final, $mejoramiento, $notaPromedio) {
       self::setidCalificacion($idCalificacion);
       self::setnombre($nombre);
       self::setparcial($parcial);
       self::setfinal($Final);
       self::setmejoramiento($mejoramiento);
       self::setnotaPromedio($notaPromedio);
     }
    
     function setidCalificacion($idCalificacion){
       $this->idCalificacion = $idCalificacion;
     } 
     function getidCalificacion(){
       return $this->idCalificacion;
     } 
     
     function setnombre($nombre){
       $this->nombre = $nombre;
     } 
     function getnombre(){
       return $this->nombre;
     }

     function setparcial($parcial){
       $this->parcial = $parcial;
     } 
     function getparcial(){
       return $this->parcial;
     }

     function setFinal($Final){
       $this->Final = $Final;
     } 
     function getFinal(){
       return $this->Final;
     }

     function setmejoramiento($mejoramiento){
       $this->mejoramiento = $mejoramiento;
     } 
     function getmejoramiento(){
       return $this->mejoramiento;
     }

     function setnotaPromedio($notaPromedio){
       $this->notaPromedio = $notaPromedio;
     } 
     function getnotaPromedio(){
       return $this->notaPromedio;
     }
     
  }


?> 
