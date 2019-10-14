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
        <h3 class="text-center">Ejercicio 3</h3>
        <?php
            /*
            Definir un array que tenga como valor diez títulos de películas. Utilizar la funciónsort para ordenarlos
            de forma alfabética y mostrarlo por pantalla con print_r.
            */

            $peliculas=["Joker","Avengers:Endgame","El bueno, el feo y el malo","Indiana Jones","SAW","El Libro De La Selva","La Jungla de Cristal"
            ,"El diario de Noa","Las Aventuras de Geronimo Stilton","Hermanos por Pelotas"];
            echo "<b>Las películas ordenadas por orden alfabético son: </b><br>";
            sort($peliculas);
            print_r($peliculas);
            

            
            
        ?>
    </div>
    </body>
</html>