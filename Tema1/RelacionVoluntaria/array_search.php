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
        <h3 class="text-center">Array_seach</h3>
        <?php
            /*
            La función array_search() busca un en el array el valor deseado y devuelve su clave. Como parámetros, primero ponemos el valor buscado,
            luego el array donde queremos buscarlo, y por último, de forma opcional, se puede poner true para que coja la clave donde el valor
            sea el introducido por el usuario; sino, cogerá la primera clave donde el valor sea igual al introducido. 
            */

            $array=[
                "1"=>"Hola",
                "2"=>"Que tal",
                "3"=>"Hasta Luego",
                "4"=>"Adios"
            ];

            echo array_search("Hola",$array);

            
        ?>
    </div>
    </body>
</html>