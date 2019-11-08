<?php

class Personas{
    private static $cantidad=0;
    private $nombre;
    private $edad;
    private $mail;
    public $nick;

    public function __construct(){
        if (func_num_args()==1) {
            $this->nombre=func_get_arg(0);
        }
        self::$cantidad++;
        $this->edad='18 (edad por defecto)';
        $this->nick='Pepe (Nickname por defecto)';
    }

    //---------------------GETTER & SETTER-------------------------

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function getEdad(){
        return $this->edad;
    }

 
    public function setEdad($edad){
        $this->edad = $edad;
    }

    
    public function getMail(){
        return $this->mail;
    }

    public function setMail($mail='nomail@dom.es'){
        $this->mail = $mail;
    }

    public static function getCantidad(){
        return self::$cantidad;
    }

    public function mostrarPersona(){
        echo "<div class='container text-center'>";
            echo "<b>Nombre: </b>".$this->nombre;
            echo "<br>";
            echo "<b>Edad: </b>".$this->edad;
            echo "<br>";
            echo "<b>Mail: </b>".$this->mail;
            echo "<br>";
            echo "<b>Nickname: </b>".$this->nick;
        echo "</div>";
    }
}

