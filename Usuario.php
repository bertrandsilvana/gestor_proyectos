<?php
class Usuario {
    private $usuario;
    private $nombre;
    private $email;
    private $nombre_proyecto;

    public function construct ($usuario,$nombre,$email,$nombre_proyecto){
        $this->usuario=$usuario;
        $this->nombre=$nombre;
        $this->email=$email;
        $this->nombre_proyecto=$nombre_proyecto;
    }

    public function getUsuario(){
        return this->usuario;
    }

    public function setUsuario($Usuario){
        $this->usuario=$usuario;
    }

    public function getNombre(){
    return $this->nombre;
}

    public function setNombre($Nombre){
    $this->nombre=$Nombre;
}
public function getEmail(){
    return $this->email;
}

    public function setEmail($email){
    $this->email=$email;
    } 
    public function getNombre_proyecto(){
        return $this->nombre_proyecto;
    }
    
        public function setNombre_proyecto($nombre_proyecto){
        $this->nombre_proyecto=$nombre_proyecto;
        } 
    public static function asignar_fecha_inicio($fecha_inicio){

        return "La fecha de inicio del proyecto es $fecha_inicio";
    }

    public static function asignar_fecha_fin($fecha_fin){

        return "La fecha de inicio del proyecto es $fecha_inicio";
    }
    public function agregar_proyecto ($nombre_proyecto){
        $proyectos=new proyecto($nombre_proyecto);
        $this->proyectos[]=$proyectos;
        return "proyecto incorporado".$proyectos;
    }
    /*public function eliminar_proyecto($nombre_proyecto){
        foreach($this->proyectos as index->$proyecto){
            if ($proyecto->getNombre_proyecto===$nombre_proyecto){
                unset($this->proyecto[$index]);
                $this->proyectos=array-values($this->proyectos);
                echo "proyecto eliminado".$proyecto."\n";
                return;
            }
        }
      
    }*/
    public function modificar_proyecto(){

    }



}   