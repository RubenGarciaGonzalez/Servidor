<?php
    class Coches{
        private $marca;
        private $modelo;
        private $matricula; //(Formato: nnnn-lll es decir 1234-bcb )
        private $kms;
        private $precio;
        private static $descuento=5;
        static $cant=0;

        //1.a.-Crearemos un constructor que reciba $marca, $modelo, $matricula, $klms, $precio ,
        //cantidadad se irá incrementando con cada coche que se cree.

        public function __construct($marca,$modelo,$matricula,$klms,$precio){
            self::$cant++;
            $this->marca=$marca;
            $this->modelo=$modelo;
            $this->matricula=$matricula;
            $this->kms=$klms;
            $this->precio=$precio;
        }

        //1.b.- Crear getters y setters

        //------------------GETTER & SETTER------------------------
        
        public function getMarca(){
                return $this->marca;
        }

        public function setMarca($marca){
                $this->marca = $marca;
        }



        public function getModelo(){
                return $this->modelo;
        }

        public function setModelo($modelo){
                $this->modelo = $modelo;
        }



        
        public function getMatricula(){
                return $this->matricula;
        }


        public function setMatricula($matricula){
                $this->matricula = $matricula;
        }



        public function getKms(){
                return $this->kms;
        }


        public function setKms($kms){
                $this->kms = $kms;
        }

        
        public function getPrecio(){
                return $this->precio;
        }


        public function setPrecio($precio){
                $this->precio = $precio;
        }

        public function getDescuento()
        {
                return self::$descuento;
        }


        public function setDescuento($descuento){
                self::$descuento = $descuento;
        }


        //1.c.- Crear el método mágico __toString() que me muestre todos los datos de un coche

        public function __toString(){
            return "Marca: ".$this->marca.", Modelo: ". $this->modelo.", Matricula: ". $this->matricula.", Kilometros hechos: ". $this->kms.", Precio: ". $this->precio." €, Descuento: ". self::$descuento." %, Cantidad de coches: ". self::$cant;
        }

        


    }