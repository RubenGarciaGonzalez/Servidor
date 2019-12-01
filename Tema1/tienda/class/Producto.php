<?php
    class Producto{
        private $llave;
        private $nombre;
        private $precio;
        private $codigo_fabricante;

        public function __construct(){
            $num=func_num_args();
            if ($num == 1) {
                $this->llave = func_get_arg(0);
            }
            if ($num == 4) {
                $this->llave = func_get_arg(0);
                $this->nombre = func_get_arg(1);
                $this->precio = func_get_arg(2);
                $this->codigo_fabricante = func_get_arg(3);
            }
        }

        //---------------CRUD----------------

        public function create(){
            $query = "insert into producto(nombre, precio, codigo_fabricante) values(:n, :p, :c)";
            $stmt = $this->llave->prepare($query);
            try {
                $stmt->execute([
                    ":n"=>$this->nombre,
                    ":p"=>$this->precio,
                    ":c"=>$this->codigo_fabricante
                ]);
            } catch (PDOException $ex) {
                die("Error al crear el producto !! ".$ex);
            }
        }

        public function read(){
            $query = "select * from producto order by nombre";
            $stmt= $this->llave->prepare($query);
            try {
                $stmt->execute();
            } catch (PDOException $ex) {
                die("Error al intentar leer los productos!!! ".$ex);
            }

            $todos = $stmt->fetchAll(PDO::FETCH_OBJ);
            return $todos;
        }

        public function update(){
            $query = "update producto set nombre=:n, precio=:p, codigo_fabricante=:c where codigo_fabricante=:c";
            $stmt = $this->llave->prepare($query);
            try {
                $stmt->execute([
                    ":n"=>$this->nombre,
                    ":p"=>$this->precio,
                    ":c"=>$this->codigo_fabricante
                ]);
            } catch (PDOException $ex) {
                die("Error al intentar actualizar el producto!! ".$ex);
            }
        }

        public function delete(){
            $query = "delete from producto where codigo=:c";
            $stmt = $this->llave->prepare($query);
            try {
                $stmt->execute([
                    ":c"=>$this->codigo
                ]);
            } catch (PDOException $ex) {
                die("Error al intentar borrar el producto de la base de datos!!! ".$ex);
            }
        }

        //--------------SETTER y demas------------

        public function setNombre($n){
            $this->nombre=$n;
        }

        public function setPrecio($p){
            $this->precio=$p;
        }

        public function setCodigoFabricante($c){
            $this->codigo_fabricante=$c;
        }

        function getCodigoFabricante($c){
            $query = "select * from producto where codigo_fabricante=:c";
            $stmt = $this->llave->prepare($query);
            try {
                $stmt->execute([
                    ":c"=>$c
                ]);
            } catch (PDOException $ex) {
                die("Error al obtener el nombre del fabricante ".$ex);
            }

            $pod = $stmt->fetch(PDO::FETCH_OBJ);
            return $pod;
        }

    }