<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    </head>
    <title>Relación de cadenas en PHP nº2</title>
</head>
<body style="background-color:#5d99c6"> 
    <div class="container, mt-4">
        <h3 class="text-center">Ejercicio 9</h3>
        <?php
            $frase="Bienvenidos a la aventura de aprender PHP en 30 horas";
            echo "La frase es: <b>$frase</b><br>";
            echo "La parte central de la frase es: <b>".substr($frase,14,24)."</b><br>";
            echo "La posición de la palabra PHP es: <b>".strrpos($frase,"PHP")."</b><br>";
            echo "La frase modificada resultaría: ".str_replace("aventura","<b>misión</b>",$frase);
        ?>
    </div>
    </body>
</html>