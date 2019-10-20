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
        <h3 class="text-center">array_key_exists</h3>
        <?php
            /*
            Comprueba si la clave dada esta en el array
            */

            $array=[
                "1"=>"Hola",
                "2"=>"Que tal",
                "3"=>"Hasta Luego",
                "4"=>"Adios"
            ];

            if (array_key_exists("1",$array)) {
                echo "La clave 1 existe en el array<br>";
            }else{
                echo "La clave 1 no existe en el array<br>";
            }

            if (array_key_exists("6",$array)) {
                echo "La clave 6 existe en el array<br>";
            }else{
                echo "La clave 6 no existe en el array<br>";
            }
            
        ?>
    </div>
    
    </body>
</html>

