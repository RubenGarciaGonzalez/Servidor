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
        <h3 class="text-center">Ejercicio 8</h3>
        <?php
        /*
        Crea un array con los nombres Pedro, Ismael, Sonia, Clara, Susana, Alfonso y Teresa. Muestra el
        número de elementos que contiene y cada elemento en una lista HTML no numerada.
        */

        $array=[
            "Pedro",
            "Ismael",
            "Sonia",
            "Clara",
            "Susana",
            "Alfonso",
            "Teresa"
        ];

        echo "<b>Lista de nombres</b><br>";
        echo "<ul>";
            for ($i=0; $i < sizeof($array) ; $i++) { 
                echo "<li type='disc'>$array[$i]</li>";
            }
            echo "<li>El total de nombres es ".count($array)."</li>";
        echo "</ul>";

        ?>
    </div>
    </body>
</html>