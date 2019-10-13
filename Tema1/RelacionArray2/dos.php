<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    </head>
    <title>Relación de array en PHP nº2</title>
</head>
<body style="background-color:#5d99c6"> 
    <div class="container, mt-4">
        <h3 class="text-center">Ejercicio 2</h3>
        <?php
            /*
            Crea un array con una lista de 5 alumnos de la clase. Muestra primero la lista de los 3
            primeros  alumnos del  array  y  luego  los  dos  últimos  de  la  lista  usando  las 
            funciones array_slice y array_splice
            */

            $alumnos=[
                "Mike",
                "Perdigon",
                "Woody",
                "Luke",
                "Anthony"
            ];

            $alumnosSlice=array_slice($alumnos,0,3);
            echo "<b>Mostrando los tres primeros alumnos del array:</b><br>";
            print_r($alumnosSlice);
            echo "<br>";
            echo "<b>Mostrando los dos últimos alumnos del array:</b><br>";
            $alumnosSplice=array_splice($alumnos,-2);
            print_r($alumnosSplice);

        ?>
    </div>
    </body>
</html>