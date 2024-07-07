<?php
class proyecto{
    private $id_proyecto;
    private $nombre_proyecto;
    private $descripcion;
    private $fecha_inicio;
    private $fecha_fin;
    private $tareas;

     public function __construct($id_proyecto,$nombre_proyecto, $descripcion,$fecha_inicio,$fecha_fin,$tareas) {
        $this->id_proyecto = $id_proyecto;
         $this->nombre_proyecto = $nombre_proyecto;
          $this-> descripcion = $descripcion;
          $this->fecha_inicio = $fecha_inicio;
           $this->fecha_fin = $fecha_fin;
            $this->tareas = $tareas; 
    }
    
   public function getId_proyecto() {

   }
   public function setId_proyecto(){

   }

   public function getNombre() {

   }
   public function setNombre(){

   }
   public function getDescripcion() {

   }
   public function setDescripcion(){

   }
   public function getFecha_inicio() {

   }
   public function setFecha_inicio(){

   }
   public function getFecha_fin() {

   }
   public function setFecha_fin(){

   }
   public function getTareas() {

   }
   public function setTareas(){

   }

}