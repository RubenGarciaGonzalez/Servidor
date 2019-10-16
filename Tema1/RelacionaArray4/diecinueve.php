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
        <h3 class="text-center">Ejercicio 19</h3>
        <?php
         /*
            Crea una matriz para guardar a los amigos clasificados por diferentes ciudades. Los valores serán los siguientes:
                En Madrid: nombre Paco, edad 32, telefono 91-9999999
                En Barcelona: nombre Susana, edad 34, telefono 93-0000000
                En Toledo: nombre Sonia, edad 42, telefono 925-090909
            Haz un recorrido del array multidimensional mostrando los valores de tal manera que nos muestre en cada ciudad qué amigos tiene.
         */

            $ciudades=[
                "Madrid"=>[
                    "Nombre"=>"Paco",
                    "Edad"=>"32",
                    "Telefono"=>"91-999999"
                ],
                
                "Barcelona"=>[
                    "Nombre"=>"Susana",
                    "Edad"=>"34",
                    "Telefono"=>"93-000000"
                ],

                "Toledo"=>[
                    "Nombre"=>"Sonia",
                    "Edad"=>"42",
                    "Telefono"=>"925-090909"
                ]
            ];
            echo "<b>Amigos en diferentes ciudades</b><br>";
            foreach ($ciudades as $ciudad) {
                echo"<br>";
                foreach ($ciudad as $key => $value) {
                    echo "$key => $value <br>";
                }
            }




        ?>
    </div>
    </body>
</html>