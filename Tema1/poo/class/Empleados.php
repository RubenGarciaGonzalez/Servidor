<?php
    class Empleados extends Personas{
        private $puesto;
        private $sueldo;

        public function __construct($n,$e,$m,$p,$s){
            parent::__construct($n,$e,$m);
            $this->puesto=$p;
            $this->sueldo=$s;

        }

        //---------------------------------------------------------------

        public function __toString(){
            return parent::__toString().", {$this->puesto}, {$this->sueldo}";
        }

        //-------------------------------------------------------------------

        public function getPuesto(){
            return $this->puesto;
        }

        public function getSueldo(){
            return $this->sueldo;
        }

    
        public function setPuesto($puesto){
            $this->puesto = $puesto;
        }

        public function setSueldo($sueldo){
            $this->sueldo = $sueldo;
        }

        //--------------VAMOS A SOBREESCRIBIR ALGUNOS MÉTODOS----------------------
        //--------------El setNombre (nombre es protected)----------------------

        public function setNombre($n){
            $this->nombre="Empleado: $n";
        }

        //---------------Sobreescribimos edad: este es privado en la otra clase------------------

        public function setEdad($e){
            parent::setEdad("$e años");
        }

        public function isJefe(){
            return $this->puesto=='Jefe';
        }

    }


