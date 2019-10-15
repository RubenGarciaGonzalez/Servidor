<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    </head>
    <title>Relación de arrays en PHP nº4</title>
</head>
<body style="background-color:#5d99c6"> 
    <div class="container, mt-4">
        <h3 class="text-center">Ejercicio 16</h3>
        <?php
           /*
            Crea un array con los siguientes valores: 5 => 1, 12 => 2, 13 => 56, x => 42. Muestra elcontenido. 
            Cuenta el número de elementos que tiene y muéstralo por pantalla. A continuación borrael elemento
            de la posición 5. Vuelve a mostrar el contenido y por último elimina el array.
           */

            $array=[
                5=>1,
                12=>2,
                13=>56,
                "x"=>43,
                8=>12
            ];

            print_r($array);
            echo "<br>";
            echo "El total de elementos del array es ".count($array)."<br>";
            $nuevoArray=array_slice($array,0,4,true);
            print_r($nuevoArray);
            unset($array);


        ?>
    </div>
    </body>
</html>