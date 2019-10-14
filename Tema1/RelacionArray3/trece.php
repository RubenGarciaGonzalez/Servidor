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
        <h3 class="text-center">Ejercicio 13</h3>
        <?php
            /*
            Idem anterior pero encontrar el mínimo
            */

            $array=[28,16,3,6,2,5,85,6,9,8];
            echo "El array es :<br>";
            print_r($array);
            echo "<br>";
            for ($i=0; $i < count($array); $i++) { 
                if ($i==0) {
                    $numMin= $array[0];
                }else{
                    if ($array[$i]<$numMin) {
                        $numMin = $array[$i];
                    }
                }
            }
            echo "El menor de la lista es <b>$numMin";
            
        ?>
    </div>
    </body>
</html>