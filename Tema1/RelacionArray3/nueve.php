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
        <h3 class="text-center">Ejercicio 9</h3>
        <?php
            /*
            Dado un array de 20 elementos que consiste en números reales (con coma
            decimal) y que cada elemento representa la venta del día de un comercio.
            Calcular el promedio de venta por día utilizando alguna estructura iterativa.
            Mostrar el resultado por pantalla.
            */

            $reales=[158.2,668.5,187.5,520.2,752.8,89.5,417.2,158.4,960.5,138.5,455.2,82.5,114.5,145.2,258.8,95.5,70.2,89.4,901.5,239.5];
            $suma=0;
            for ($i=0; $i < count($reales); $i++) { 
                $suma+=$reales[$i];
            }
            $media = $suma/count($reales);
            echo "<b>La media de las ventas es: ".$media;
            

           
        ?>
    </div>
    </body>
</html>