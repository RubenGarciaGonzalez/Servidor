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
        <h3 class="text-center">in_Array</h3>
        <?php
            /*
            Comprueba si un valor esta en un array
            */

            $array=[
                "1"=>"Hola",
                "2"=>"Que tal",
                "3"=>"Hasta Luego",
                "4"=>"Adios"
            ];

            if (in_array("Ostras",$array)) {
                echo "Encontrado Ostras en el Array<br>";
            }else{
                echo "No se ha encontrado Ostras en el valor<br>";
            }

            if (in_array("Hola",$array)) {
                echo "Encontrado Hola en el array<br>";
            }else{
                echo "No se ha encontrado Hola en el array<br>";
            }

            
        ?>
    </div>
    </body>
</html>