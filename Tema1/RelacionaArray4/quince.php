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
        <h3 class="text-center">Ejercicio 15</h3>
        <?php
           /*
            Implementa   un   array   asociativo   con   los   siguientes   valores   y   ordénalo   de   menor   a   mayor.
            Muestra los valores en una tabla.$numeros = array(3, 2, 8, 123, 5, 1);
           */

         $numeros = array(3, 2, 8, 123, 5, 1);
         sort($numeros);

         echo "<table border='2' align='center'>";
            echo "<tr>";
            foreach ($numeros as $key => $value) {
                echo "<td>$value</td>";
            } 
            echo "</tr>";
        echo "</table>";
        ?>
    </div>
    </body>
</html>