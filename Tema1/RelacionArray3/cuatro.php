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
        <h3 class="text-center">Ejercicio 4</h3>
        <?php
            /*
             Definir tres arrays: uno puramente asociativo, otro puramente enumerativo y otro mixto.Luego,
             guardar en una variable la suma de los elementos de los tres arrays y mostrarla por pantalla
            */
            $arrays=array(
                array("1" => "a",
                "1" => "b",
                "1.5" => "c",
                "2" => "d"),
                array(4,8,6,9,1),
                array(15,
                "13"=>"z",
                2,
                "27"=>"dx")
            );
            
            echo "La suma de los elementos de los tres arrays es <b>". count($arrays, COUNT_RECURSIVE)."</b>"; 
            

        ?>
    </div>
    </body>
</html>