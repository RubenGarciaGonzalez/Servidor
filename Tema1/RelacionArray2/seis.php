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
        <h3 class="text-center">Ejercicio 6</h3>
        <?php
            /*
            Crea  un  array  con  los  países  de  la  Unión  Europeay  suscapitales.
            Muestra  por cada  uno  de  ellos  la  frase: “La capital de <<país>> es <<capital>>”.
            Luego ordena la lista por el nombre del país y luego por el nombre de la capital.
            */
            $capitales = [
                "Alemania" => "Berlín",
                "Austria" => "Viena",
                "Bélgica" => "Bruselas",
                "Bulgaria" => "Sofía",
                "Chipre" => "Nicosia",
                "Croacia" => "Zagreb",
                "Dinamarca" => "Copenhague",
                "Eslovaquia" => "Bratislava",
                "Eslovenia" => "Luibliana",
                "España" => "Madrid",
                "Estonia" => "Tallín",
                "Finlandia" => "Helsinki",
                "Francia" => "París",
                "Grecia" => "Atenas",
                "Hungría" => "Budapest",
                "Irlanda" => "Dublín",
                "Italia" => "Roma",
                "Letonia" => "Riga",
                "Lituania" => "Vilna",
                "Luxemburgo" => "Luxemburgo",
                "Malta" => "La Valeta",
                "Países Bajos" => "Ámsterdam",
                "Polonia" => "Varsovia",
                "Portugal" => "Lisboa",
                "Reino Unido" => "Londres",
                "República Checa" => "Praga",
                "Rumanía" => "Bucarest",
                "Suecia" => "Estocolmo",
            ];

            echo "<b>Países y capitales de Europa:</b><br>";
            foreach ($capitales as $k => $v) {
                echo "La capital de $k es $v<br>";
            }
            echo "<br>";
            echo "<b>Países y capitales de Europa ordenados por nombre de país:</b><br>";
            ksort ($capitales);
            foreach ($capitales as $k => $v) {
                echo "La capital de $k es $v<br>";
            }
            echo "<br>";
            echo "<b>Países y capitales de Europa ordenados por nombre de capital:</b><br>";
            asort ($capitales);
            foreach ($capitales as $k => $v) {
                echo "La capital de $k es $v<br>";
            }




            
            

        ?>
    </div>
    </body>
</html>