<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    </head>
    <title>UNO</title>
</head>
<body style="background-color:bisque">
    <div class="container mt-3">
        <?php
            require('clases/Coches.php');
            //Instanciamos un coche
            $miCoche=new Coches();
            $miCoche1=new Coches();
            echo "Hemos instanciado: ".Coches::$contador. " coches";
            echo "<br>";
            echo "Hemos instanciado: ".$miCoche::$contador. " coches";
            echo "<br>";
            echo "Hemos instanciado: ".$miCoche1::$contador. " coches";
            //Veamos el id de cada coche
            echo "<br>";
            echo "El ID de \$miCoche es: ".$miCoche->getId();
            echo "<br>";
            echo "El ID de \$miCoche1 es: ".$miCoche1->getId();
            //Resto de atributos de coche
            //Los publicos directamente
            $miCoche->matricula='1234-JJB';
            $miCoche->color='Rojo';
            //Los privados
            $miCoche->setModelo('Ibiza');
            $miCoche->setMarca('Seat');
            $miCoche->mostrarCoche();
            //---------------------------------------------------------
            $miCoche2=new Coches('1234-ABC');
            echo "El id de \$miCoche2 es: ".$miCoche2->getId()."<br>";
            echo $miCoche2->matricula;
            echo "<br>";
            echo "Hay un total de : ".Coches::$contador. " coches.";
        ?>
    </div>
</body>
</html>