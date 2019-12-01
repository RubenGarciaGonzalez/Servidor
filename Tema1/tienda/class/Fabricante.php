<?php
    class Fabricante{
        private $llave;
        private $codigo;
        private $nombre;

        public function __construct(){
            $num=func_num_args();
            if ($num==1) {
                $this->llave=func_get_arg(0);
            }
            if ($num==2) {
                $this->llave=func_get_arg(0);
                $this->nombre=func_get_arg(1);
            }
        }

        //------------CRUD-------------

        public function create(){
            $query = "insert into fabricante(nombre) values(:n)";
            $stmt=$this->llave->prepare($query);
            try {
                $stmt->execute([
                    ":n"=>$this->nombre
                ]);
            } catch (PDOException $ex) {
                die("Error al crear el fabricante nuevo!! ".$ex);
            }
        }

        public function read(){
            $query = "select * from fabricante order by codigo, nombre";
            $stmt=$this->llave->prepare($query);
            try {
                $stmt->execute();
            } catch (PDOException $ex) {
                die("Error al leer de la base de datos!! ".$ex);
            }

            $todos = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $todos;
        }

        public function update(){
            $query = "update fabricante set nombre=:n where codigo=:c";
            $stmt=$this->llave->prepare($query);
            try {
                $stmt->execute([
                    ":n"=>$this->nombre,
                    ":c"=>$this->codigo
                ]);
            } catch (PDOException $ex) {
                die("Error al intentar actualizar el fabricante!! ".$ex);
            }
        }

        public function delete(){
            $query = "delete from fabricante where codigo=:c";
            $stmt=$this->llave->prepare($query);
            try {
                $stmt->execute([
                    ":c"=>$this->codigo
                ]);
            } catch (PDOException $ex) {
                die("Error al intentar borrar el fabricante de la base de datos!! ".$ex);
            }
        }

        //-----------Setters y otros métodos-----------

        public function setNombre($n){
            $this->nombre=$n;
        }

        public function setCodigo($c){
            $this->codigo=$c;
        }

        function getCodigo($c){
            $query = "select * from fabricante where codigo=:c";
            $stmt=$this->llave->prepare($query);
            try {
                $stmt->execute([
                    ":c"=>$c
                ]);
            } catch (PDOException $ex) {
                die("Error al obtener la información del fabricante!!, ".$ex);
            }

            $fab = $stmt->fetch(PDO::FETCH_OBJ);
            return $fab;
        }

        
    }