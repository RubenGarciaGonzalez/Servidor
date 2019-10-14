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
        <h3 class="text-center">Ejercicio 1</h3>
        <?php
            /*
            Definir un array con valores numéricos. Realizar la suma de todos los valores y guardarlo
            en una variable.Mostrar la suma por pantalla.
            */

            $numeros=[1,2,3,4,5,6,7,8,9];
            $suma=0;
            for ($i=0; $i < sizeof($numeros)+1; $i++) { 
                $suma+=$i;
            }

            echo "<b>La suma en total de los valores del array es $suma";
            
        ?>
    </div>
    </body>
</html>