<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    
</body>
</html>


<?php

class Alumnos
{
    private $llave;
    private $idAl;
    private $nomAl;
    private $apeAl;
    private $mail;
    private $created_at;

    public function __construct()
    {
        $num=func_num_args();

        if($num==1){
            $this->llave=func_get_arg(0);
        }
        if($num==4){ //Vamos a ponerlo en el orden que lo introduciremos 
            //ORDEN: conector, nombre, apellido, mail
            $this->llave=func_get_arg(0);
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
        $stmt=$this->llave->prepare($consulta); //Preparamos la consulta
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
        $stmt=$this->llave->prepare($borrar);
        try{
            $stmt->execute([
                ':id'=>$this->idAl
            ]);
            
        }catch(PDOException $ex){
            die("error al borrar alumno: ".$ex);
        }
     }
    //Update
    public function edit()
    {
        $edit="update alumnos set nomAl=:n, apeAl=:a, mail=:m where idAl=:i";
        $stmt=$this->llave->prepare($edit);
        try{
            $stmt->execute([
                ':n'=>$this->nomAl,
                ':a'=>$this->apeAl,
                ':m'=>$this->mail,
                ':i'=>$this->idAl
            ]);
        }catch(PDOException $ex){
            die("error al editar alumno: ".$ex);
        }

     }
    //Create
    public function create()
    {
        $crear="insert into alumnos(nomAl,apeAl, mail) values(:n, :a, :m)";
        $stmt=$this->llave->prepare($crear);
        try{
            $stmt->execute([
                ':n'=>$this->nomAl,
                ':a'=>$this->apeAl,
                ':m'=>$this->mail
            ]);
        }catch(PDOException $ex){
            die("Error al crear el alumno!!".$ex);
        }
     }
     //-----------------------------------------------------
     public function getAlumno(){
         $consulta="select * from alumnos where idAl=:id";
         $stmt=$this->llave->prepare($consulta);
         try{
            $stmt->execute([
                ':id'=>$this->idAl
            ]);
         }catch(PDOException $ex){

            die("Error al recuperar el Alumno: ".$ex);
        }
        $alumno=$stmt->fetch(PDO::FETCH_OBJ);
        return $alumno;
     }

    //--------------------------------------------------------

    public function existeMail(){
        $consulta="select * from alumnos where mail=:m";
        $stmt=$this->llave->prepare($consulta);

        try{
            $stmt->execute([
                ':m'=>$this->mail
            ]);
            
        }catch(PDOException $ex){
            die("Error al buscar el mail!!".$sex);
        }
        $cont=0;
        while($fila=$stmt->fetch(PDO::FETCH_ASSOC)){
            $cont++;
        }
        return ($cont!=0);
    }

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
}
