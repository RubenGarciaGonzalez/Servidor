<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    </head>
    <title>Relación de arrays en PHP nº4</title>
</head>
<body style="background-color:#5d99c6"> 
    <div class="container, mt-4">
        <h3 class="text-center">Ejercicio 10</h3>
        <?php
           /*
            Rellena un array de 10 enteros con los 10 primeros números naturales. Calcula la media de los que están 
            en posiciones pares y muestra los impares por pantalla.
           */

           $array=[1,2,3,4,5,6,7,8,9,10];
           $suma=0;
           for ($i=0; $i < sizeof($array); $i++) { 
               if ($array[$i]%2!==0) {
                   $suma += $array[$i];
               }
               else{
                   echo $i." ";
               }
           }
           echo "<br>";
           $media=$suma/(count($array)/2);
           echo "La media es $media";

           
            
        ?>
    </div>
    </body>
</html>