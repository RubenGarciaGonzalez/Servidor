<?php

class Coches{
    //Los atributos s¡que queramos public, protected o private
    public static $contador=0;
    private $id;
    public $matricula;
    private $modelo;
    private $marca;
    public $color;

    //Métodos: primero el constructor 
    public function __construct(){
        if (func_num_args()==1) {
            $this->matricula=func_get_arg(0);
        }
        self::$contador++;
        $this->id=self::$contador;
    }

    //Getter y Setter para modelo
    public function setModelo($m){
        $this->modelo=$m;
    }

    public function getModelo(){
        return $this->modelo;
    }

    
    public function setMarca($marca){
        $this->marca = $marca;
    }

    public function getMarca(){
        return $this->marca;
    }

    public function getId()
    {
        return $this->id;
    }

    public function mostrarCoche(){
        echo "<div class='container text-center'>";
            echo "<b>id:</b>".$this->id;
            echo "<br>";
            echo "<b>Marca:</b>".$this->marca;
            echo "<br>";
            echo "<b>Modelo:</b>".$this->modelo;
            echo "<br>";
            echo "<b>Color:</b>".$this->color;
            echo "<br>";
            echo "<b>Matricula:</b>".$this->matricula;
        echo "</div>";
    }
}