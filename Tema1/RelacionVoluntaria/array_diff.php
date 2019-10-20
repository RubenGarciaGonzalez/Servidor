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
        <h3 class="text-center">array_diff</h3>
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
            ];

            $comparacion=array_diff($array,$array1);

            print_r($comparacion);
            echo "<br>";


            /*
                array_diff_assoc calcula la diferencia entre array con un chequeo adicional de los indices. A diferencia de array_diff,
                también se usan las claves de los arrays en la comparación
            */

            $array2=array(10,11,12,13);
            $array3=array("7","4","3","13");
            $comparacion1=array_diff_assoc($array2,$array3);
            print_r($comparacion1);
            echo "<br>";


            /*
                array_diff_key calcula la diferencia entre arrays empleando las claves para la comparación
            */

            $array4=[
                "1"=>"Hola",
                "2"=>"Que tal",
                "3"=>"Hasta Luego",
                "4"=>"Adios"
            ];

            $array5=[
                "1"=>"Hola",
                "3"=>"Que tal",
                "7"=>"Hasta Luego",
                "6"=>"adfasf"
            ];

            print_r(array_diff_key($array4,$array5));





        ?>
    </div>
    
    </body>
</html>

