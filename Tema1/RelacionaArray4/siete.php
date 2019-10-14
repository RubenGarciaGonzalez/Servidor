<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    </head>
    <title>Relación de arrays en PHP nº1</title>
</head>
<body style="background-color:#5d99c6"> 
    <div class="container, mt-4">
        <h3 class="text-center">Ejercicio 7</h3>
        <?php
        /*
        Repite el ejercicio anterior pero ahora si se ha de crear índices, ejemplo: El índice del array que
        contiene como valor Madrid es MD.
        */

        $ciudades=[
            "MD"=>"Madrid",
            "BCN"=>"Barcelona",
            "LND"=>"Londres",
            "NY"=>"New York",
            "LA"=>"Los Ángeles",
            "CHI"=>"Chicago"
        ];

        echo "<h3>CIUDADES</h3><br>";
        foreach ($ciudades as $k => $v) {
              echo "El índice del array que contiene como valor $v es $k<br>";
        }

        ?>
    </div>
    </body>
</html>