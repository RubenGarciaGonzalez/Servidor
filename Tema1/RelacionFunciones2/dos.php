<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    </head>
    <title>Relación Funciones de PHP nº2</title>
    <?php

        function division($dividendo,$divisor){
            if (!(is_int($dividendo)) || !(is_int($divisor))) {
                echo "<h2 class='text-center text-danger'>ERROR!!! LOS NÚMEROS PASADOS NO SON ENTEROS</h2>";
            }else{
                if($dividendo > $divisor){
                    $resto=$dividendo;
                    $resultado=0;
                    
                    while ($resto >= $divisor) {
                        $resto-=$divisor;
                        $resultado++;
                    }

                    echo "<h4 class='text-center'>El resultado de la división de $dividendo entre $divisor es : <b>$resultado</b></h4> ";

                }
            }

        }
        
    ?>
</head>
<body style="background-color:#5d99c6"> 
    <div class="container, mt-4">
        <h3 class="text-center">Ejercicio 2</h3>
        <?php
            /*
            2.-Sabemos que la división entera de un número m, por otro n en realidad es calcular la cantidad de
            veces que a m le podemos restar n, es decir es un resta sucesiva. Implementaremos una función que me
            devuelva el resultado de la división entera de un dividendo m por un divisor n usando las restas 
            sucesivas. Comprobaremos que los números son enteros.
            */

            $dividendo=250;
            $divisor=10;

            division($dividendo,$divisor);

        ?>
    </div>
    </body>
</html>