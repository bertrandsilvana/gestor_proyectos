<?php
class Usuario {
    private $usuario;
    private $nombre;
    private $email;

    public function construct ($usuario,$nombre,$email){
        $this->usuario=$usuario;
        $this->nombre=$nombre;
        $this->email=$email;
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


}   