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
        <h3 class="text-center">Ejercicio 6</h3>
        <?php
         /*
        Crea un array introduciendo las ciudades: Madrid, Barcelona, Londres, New York, Los Ángeles y
        Chicago, sin asignar índices al array. A continuación, muestra el contenido del array haciendo un recorrido
        diciendo el valor correspondiente a cada índice, ejemplo:
        La ciudad con el índice 0 tiene el nombre Madrid.
         */

        $ciudades=[
            "Madrid",
            "Barcelona",
            "Londres",
            "New York",
            "Los Ángeles",
            "Chicago"
        ];

        echo "<h3>CIUDADES</h3><br>";
        foreach ($ciudades as $k => $v) {
              echo "La ciudad con el índice $k tiene el nombre $v.<br>";
        }

        ?>
    </div>
    </body>
</html>