<?php

    class CochesVendidos extends Coches{
        private $fecha_venta;
        private $precio_venta;

        public function __construct($marca,$modelo,$matricula,$klms,$precio,$fecha_venta,$precio_venta){
            parent::__construct($marca,$modelo,$matricula,$klms,$precio);
            $this->fecha_venta=$fecha_venta;
            $this->precio_venta=$precio - (($precio*5)/100);
        }
 
        public function getFecha_venta(){
            return $this->fecha_venta;
        }

 
        public function setFecha_venta($fecha_venta){
            $this->fecha_venta = $fecha_venta;
        }


        public function getPrecio_venta(){
            return $this->precio_venta;
        }


        public function setPrecio_venta($precio_venta){
           $this->precio_venta = parent::getPrecio() - ((parent::getPrecio() *5)/100);
        }

        public function __toString(){
            return "Marca: ".parent::getMarca().", Modelo: ". parent::getModelo().", Matricula: ". parent::getMatricula().", Kilometros hechos: ". parent::getKms().", Precio: ". parent::getPrecio()." €, Precio con descuento: ".$this->precio_venta." €";
        }

        public function venderCoches($m){
            if ($m!=parent::getMatricula()) {
                    echo "No se ha pasado ninguna mátricula";
            }
            echo "El vehículo con mátricula: $m está en venta";
        }
        
    }