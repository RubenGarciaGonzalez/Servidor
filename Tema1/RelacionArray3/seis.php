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
        <h3 class="text-center">Ejercicio 6</h3>
        <?php
            /*
            Realizar un dado virtual en PHP mediante el uso de arrays. Cada vez que se
            refresque la pantalla, deberá verse un número distinto al azar entre 1 y 6
            */
           $numeroAleatorio=rand(1,6);
           $array=array(
               $numeroAleatorio
           );
           print_r($array);
           
            
        ?>
    </div>
    </body>
</html>