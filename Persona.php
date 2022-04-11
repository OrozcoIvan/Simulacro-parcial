<?php 
/*En la clase Persona:
1. Se registra la siguiente información: nombre, apellido, dni, direccion, mail, telefono y neto.
2. Método constructor que recibe como parámetros los valores iniciales para los atributos definidos en la
clase.
3. Los métodos de acceso de cada uno de los atributos de la clase.
4. Redefinir el método _toString para que retorne la información de los atributos de la clas*/

class Persona{
    private $nombre;
    private $apellido;
    private $dni;
    private $direccion; 
    private $mail; 
    private $telefono; 
    private $neto;

    public function __construct($nombre,$apellido,$dni,$direccion,$mail,$telefono,$neto)
    {
       $this-> nombre =$nombre;
       $this-> apellido =$apellido;
       $this-> dni =$dni;
       $this-> direccion =$direccion;
       $this-> mail =$mail;
       $this-> telefono = $telefono;
       $this-> neto = $neto;
    }

    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function getDNI(){
        return $this->dni;
    }
    public function getDireccion(){
        return $this->direccion;
    }
    public function getMail(){
        return $this->mail;
    }
    public function getTelefono(){
        return $this->telefono;
    }
    public function getNeto(){
        return $this->neto;
    }

    public function setNombre($nombre){
        $this->nombre=$nombre;
    } 
    public function setApellido($apellido){
        $this->apellido=$apellido;
    } 
    public function setDNI($dni){
        $this->dni=$dni;
    } 
    public function setDireccion($direccion){
        $this->direccion=$direccion;
    } 
    public function setMail($mail){
        $this->mail=$mail;
    } 
    public function setTelefono($telefono){
        $this->telefono=$telefono;
    } 
    public function setNeto($neto){
        $this->neto=$neto;
    } 

    public function __toString()
    {
        return  "\n Nombre: ".$this->getNombre().
                "\n Apellido: ".$this->getApellido().
                "\n Dni: ".$this->getDNI().
                "\n Direccion: ".$this->getDireccion().
                "\n Mail: ".$this->getMail().
                "\n Telefono: ".$this->getTelefono().
                "\n Neto: ".$this->getNeto()
                ;
    }

}

?>