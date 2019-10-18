<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    </head>
    <title>Relación Funciones de PHP nº2</title>
    <?php

        function mayorMenor($array){
            if (!(is_array($array))) {
                echo "Esto no es una array";
            }else{
                echo "El array pasado es: <br>";
                print_r($array);
                echo "<br>";
                $menor=min($array);
                $mayor=max($array);
                $menorMayor=[$menor, $mayor];
                echo "El array con el menor y el mayor correspodiente es :<br>";
                print_r($menorMayor);
            }
        }

    ?>
</head>
<body style="background-color:#5d99c6"> 
    <div class="container, mt-4">
        <h3 class="text-center">Ejercicio 1</h3>
        <?php
            /*
            1.- Diseñaremos una función que le pasaremos un array de números y me devolverá un array
            con el mayor y el menor. Controlaremos que nos llegue un array y que los valores sean numéricos.
            */

            $array=[1,2,3,4,5,6,8,4,15,21,14];

            mayorMenor($array);

        ?>
    </div>
    </body>
</html>