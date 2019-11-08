<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    </head>
    <title>Tres</title>
</head>
<body style="background-color:cadetblue">
    <div class="container mt-3">
        <?php
            require('class/Personas.php');
            require('class/Empleados.php');
            $persona1=new Personas('Lucas Perez',34,'lucas@correo.es');
            $persona2=$persona1;
            $persona2->setNombre('Kiko Perez');
            echo $persona1 -> getNombre();
            echo "<br>";
            echo $persona2->getNombre();
            echo "<hr>";
            //------------------------------------------
            $persona3=clone $persona1;
            $persona3->setNombre('Persona 3');
            echo $persona1 -> getNombre();
            echo "<br>";
            echo $persona2->getNombre();
            echo "<br>";
            echo $persona3->getNombre();
            echo "<br>";
            echo "Contador de personas: ".Personas::$cant; //Cuenta solo una persona porque solo se ha llamado 1 vez al constructor de Persona
            //----------------------------------------------------------------
            echo "<hr>";
            echo $persona3->getNombre();
            echo "<br>";
            // echo $persona3->telefono;
            echo "<br>";
            // echo $persona3->edad;
            echo "<br>";
            echo "El mail de persona3 es: ".$persona3->mail;
            //----------------------------------------------
            echo "<hr>";
            // $persona3->edad=123;
            // echo $persona3->edad;
            echo "<br>";
            echo $persona1;
            echo "<hr>";
            //----------------------------------------------------------------------------
            $empleado=new Empleados("Pedro Gomez",45,"mail@mail","Jefe",1234.56);
            echo "<br>";
            echo $empleado;
            echo "<br>";
            echo Personas::$cant;
            echo "<hr>";
            $empleado->getNombre();
            echo "<br>";
            //-----------------------------------------------------------------------------
            // $empleado->nombre='Juan Sebastian';
            echo "<br>";
            // echo $empleado->nombre;
            //--------------------------------------------------
            echo "<br>";
            $empleado->setNombre('Perico');
            echo $empleado;
            //------------------------------------
            echo "<hr>";
            $empleado->setEdad(28);
            echo $empleado;
            echo "<hr>";
            //-------------------------------------
            if ($empleado->isJefe()) {
                echo $empleado->getNombre()." es jefe";
            }else{
                echo "No es jefe";
            }

            $persona34=new Personas();

        ?>
    </div> 
</body>
</html>