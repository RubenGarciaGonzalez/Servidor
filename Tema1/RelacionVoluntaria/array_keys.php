<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    </head>
    <title>Arrays Ampliación</title>
</head>
<body style="background-color:#5d99c6"> 
    <div class="container, mt-4 text-center">
        <h3 class="text-center">Array_keys</h3>
        <?php
            /*
            array_keys() devuelve todas las claves de un array o el subconjunto de claves de un array. Si dentro de sus parametros, se especifica
            el parámetro search_values, serán solamente devueltas las claves para ese valor.
            */

            $array=[
                "1"=>"Hola",
                "2"=>"Que tal",
                "3"=>"Hasta Luego",
                "4"=>"Adios"
            ];

            echo print_r(array_keys($array));
            echo "<br>";
            echo print_r(array_keys($array,"Adios"));

            
        ?>
    </div>
    </body>
</html>