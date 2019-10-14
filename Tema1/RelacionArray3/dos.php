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
        <h3 class="text-center">Ejercicio 2</h3>
        <?php
            /*
            Definir un array que tenga claves de un caracter representando cada letra del alfabeto desde la a hasta la f.
            En la misma definición, asignarle a cada clave un nombre propio que comience con esa letra.Ejemplo array (‘a’=>’Amanda’);
            Mostrar el resultado por pantalla con var_dump
            */
            $array=[
                "A"=>"Álvaro",
                "B"=>"Begoña",
                "C"=>"Carlos",
                "D"=>"Diana",
                "E"=>"Eustaquio",
                "F"=>"Falafel"
            ];
            echo "<b>El array resultante es: </b><br>";
            var_dump($array);

            
            
        ?>
    </div>
    </body>
</html>