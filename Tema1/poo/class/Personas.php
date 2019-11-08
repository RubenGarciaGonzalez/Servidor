<?php
  class Personas{
      static $cant=0;
      protected $nombre;
      private $edad;
      public $mail;

      //-----------------------------

      public function __construct($n,$e,$m){
          self::$cant++;
          if (func_num_args()==3) {
              $this->nombre=func_get_arg(0);
              $this->edad=func_get_arg(1);
              $this->mail=func_get_arg(2);  
          }
          
      }

      //----------GETTER & SETTER-----------

      public function getNombre(){
            return $this->nombre;
      }

      public function setNombre($nombre){
            $this->nombre = $nombre;
      }

      //Métodos mágicos
    //   public function __get($p){
    //       if (property_exists($this,$p)) {
    //           return $this->$p;
    //       }
    //       return "La propiedad <b>$p</b> no existe en esta clase!!!";
    //   }

    //   public function __set($p,$v){
    //       if (property_exists($this,$p)) {
    //           //Lo que queramos hacer
    //             $this->$p=$v;

    //       }else{
    //             echo "El atributo $p NO existe!!!";
    //       }
    //   }

      public function __toString(){
          return "{$this->nombre}, {$this->edad},{$this->mail}";
      }

      public function getEdad(){
           return $this->edad;
      }

      public function setEdad($edad) {
            $this->edad = $edad;

      }
  }  