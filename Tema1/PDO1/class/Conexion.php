<?php
class Conexion{
    private $conector;
    private $user;
    private $host;
    private $pass;
    private $base;
    private $dsn;

    public function __construct()
    {
        $this->user="userpdo";
        $this->pass="password";
        $this->base="pdo1";
        $this->host="localhost";
        //DSN: El nombre del host, en este caso localhost donde esta la BD
        //DBNAME es el nombre de nuestra base de datos
        //Charset utf8
        $this->dsn="mysql:host={$this->host};dbname={$this->base};charset=utf8";  //Donde me conecto a la bd
    }

    public function getConector(){
        try{
            //CREAMOS UN OBJETO BD
            $this->conector=new PDO($this->dsn, $this->user, $this->pass);
            //Te da la informacion del error
            $this->conector->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $ex){
            die("Error de conexion, mensaje: ".$ex);
        }
        return $this->conector;
    }
}