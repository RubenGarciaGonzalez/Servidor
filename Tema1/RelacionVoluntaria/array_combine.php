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
        <h3 class="text-center">array_combine</h3>
        <?php
            /*
            Calcula la diferencia entre arrays 
            */
            $array=[
                "1"=>"Hola",
                "2"=>"Que tal",
                "3"=>"Hasta Luego",
                "4"=>"Adios"
            ];

            $array1=[
                "5"=>"Hola",
                "6"=>"Que tal",
                "7"=>"Hasta Luego",
                "8"=>"Shss"
            ];

            $a=array_combine($array,$array1);

            print_r($a);

        ?>
    </div>
    </body>
</html>

