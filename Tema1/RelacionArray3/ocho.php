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
        <h3 class="text-center">Ejercicio 8</h3>
        <?php
            /*
            Definir un array de 5 elementos y asignar a cada uno de ellos un número.
            Mediante una estructura condicional, determinar si el promedio de los números
            son mayores o menores que 6. Mostrar un mensaje por pantalla informando el
            resultado.
            */

            
            $array=[15,2,6,4,8];
            echo "<b>El array es :</b><br>";
            print_r($array);
            echo "<br>";
            $suma=0;
            for ($i=0; $i < count($array); $i++) { 
                $suma+=$array[$i];
            }

            
            
            $media = $suma/count($array);
            if ($media<6) {
                echo "La media es menor de seis: ".$media;
            }else{
                echo "La media es mayor de seis: ".$media;
            }
            
            
        ?>
    </div>
    </body>
</html>