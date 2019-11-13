<?php

class Alumnos
{
    private $conectorBD;
    private $idAl;
    private $nomAl;
    private $apeAl;
    private $mail;
    private $created_at;

    public function __construct()
    {
        $num=func_num_args();

        if($num==1){
            $this->conectorBD=func_get_arg(0);
        }
        if($num==4){ //Vamos a ponerlo en el orden que lo introduciremos 
            //ORDEN: conector, nombre, apellido, mail
            $this->conectorBD=func_get_arg(0);
            $this->nomAl=func_get_arg(1); 
            $this->apeAl=func_get_arg(2);
            $this->mail=func_get_arg(3); 
        }
    }

    //READ
    public function read()
    { 
        $consulta = "select * from alumnos order by apeAl";
        //Estamento
        $stmt=$this->conectorBD->prepare($consulta); //Preparamos la consulta
        try{
            $stmt->execute(); //La ejecutamos
        }catch(PDOException $ex){
            die("Error al recuperar alumnos: ".$ex);
        }
        $filas=$stmt->fetchAll(PDO::FETCH_OBJ); //ME DEVUELVE EL RESULTADO DE LA EJECUCION, para pocas filas...
        return $filas;
    }
    //Delete
    public function delete()
    {
        $borrar="delete from alumnos where idAl=:id";
        $stmt=$this->conectorBD->prepare($borrar);
        try {
            $stmt->execute([
                ":id"=>$this->idAl
            ]);
        } catch (PDOException $ex) {
            die("Error al borrar el alumno!!".$ex);
        }
    }
    //Update
    public function edit()
    {
        $edit="update alumnos set nomAl=:n, apeAl=:a, mail=:m, Wx";


    }
    //Create
    public function create()
    {
        $crear="insert into alumnos(nomAl, apeAl, mail) values (:n, :a, :m)";
        $stmt=$this->conectorBD->prepare($crear);
        try {
            $stmt->execute([
                ":n"=>$this->nomAl,
                ":a"=>$this->apeAl,
                ":m"=>$this->mail
            ]);
        } catch (PDOException $ex) {
            die("Error al crear el alumno!! ". $ex);
        }
    }


    //------------------------------------------
    public function getAlumno(){
        $consulta='select * from alumnos where idAl=:id';
        $stmt=$this->conectorBD->prepare($consulta);
        try {
            $stmt->execute([
                ":id"=>$this->idAl
            ]);
        } catch (PDOException $ex) {
            die("Error al recuperar el Alumno: ".$ex);
        }

        $alumno=$stmt->fetch(PDO::FETCH_OBJ);
        return $alumno;
    }
    //------------------------------------------
    

    public function getIdAl()
    {
        return $this->idAl;
    }


    public function setIdAl($idAl)
    {
        $this->idAl = $idAl;
    }


    public function getNomAl()
    {
        return $this->nomAl;
    }


    public function setNomAl($nomAl)
    {
        $this->nomAl = $nomAl;
    }


    public function getApeAl()
    {
        return $this->apeAl;
    }


    public function setApeAl($apeAl)
    {
        $this->apeAl = $apeAl;
    }

    public function getMail()
    {
        return $this->mail;
    }


    public function setMail($mail)
    {
        $this->mail = $mail;
    }

    //---------------------------------------------------------------

    public function existeMail(){
        $consulta="select * from alumnos where mail=:m";
        $stmt=$this->conectorBD->prepare($consulta);
        try {
            $stmt->execute([
                ":m"=>$this->mail
            ]);
        } catch (PDOException $ex) {
            die("Error al buscar el mail!: ".$ex);
        }
        $cont=0;
        while ($filas=$stmt->fetch(PDO::FETCH_ASSOC)) {
            $cont++;
        }
        return ($cont!=0);
    }
}
