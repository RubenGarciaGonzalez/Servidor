<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    </head>
    <title>Relación de array en PHP nº3</title>
</head>
<body style="background-color:#5d99c6"> 
    <div class="container, mt-4">
        <h3 class="text-center">Ejercicio 14</h3>
        <?php
            /*
            Hacer un programa que calcule todos los números primos entre 1 y 50 y los
            muestre por pantalla. Un número primo es un número entero que sólo es
            divisible por 1 y por sí mismo.
            */
            echo "<b>Los números primos entre el 1 y el 50 son: </b><br>";
            for ($i=0; $i < 50 ; $i++) { 
                $divisor=2;
                $primo=true;
                do{
                    if($i % $divisor == 0){
                        $primo=false;
                    }
                    $divisor++;
                }while(($i >= $divisor*2) && ($primo == true));
                if ($primo == true) {
                    echo $i." ";
                }
            }


        ?>
    </div>
    </body>
</html>