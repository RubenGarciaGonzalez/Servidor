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
        <h3 class="text-center">Ejercicio 12</h3>
        <?php
            /*
            Dado un array enumerativo de 10 elementos de números enteros (sin coma
            decimal), encontrar el máximo de todos esos números usando una estructura
            iterativa y mostrarlo por pantalla.
            */

            $array=[28,16,3,6,2,5,85,6,9,8];
            echo "El array es :<br>";
            print_r($array);
            echo "<br>";
            for ($i=0; $i < count($array); $i++) { 
                if ($i==0) {
                    $numMax= $array[0];
                }else{
                    if ($array[$i]>$numMax) {
                        $numMax = $array[$i];
                    }
                }
            }
            echo "El mayor de la lista es <b>$numMax";
            
        ?>
    </div>
    </body>
</html>