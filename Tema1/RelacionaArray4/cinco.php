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
        <h3 class="text-center">Ejercicio 5</h3>
        <?php
         /*
         Crea un array asociativa para introducir los datos de una persona:
         Nombre: Pedro Torres
         Dirección: C/ Mayor, 37
         Teléfono: 123456789
         Al acabar muestra los datos por pantalla.
         */

        $array=[
            "Nombre"=>"Pedro Torres",
            "Direccion"=>"C/Mayor, 37",
            "Teléfono"=>"123465789"
        ];
        echo "<b>Datos de persona</b><br>";
        foreach ($array as $k => $v) {
              echo "\$array[$k]=".$v."<br>";
        }

        ?>
    </div>
    </body>
</html>