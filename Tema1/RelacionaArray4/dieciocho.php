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
        <h3 class="text-center">Ejercicio 18</h3>
        <?php
         /*
            Crea un array llamado deportes e introduce los siguientes valores: futbol, baloncesto, natación y tenis.
            Haz el recorrido de la matriz con un for para mostrar sus valores. A continuación realiza la ssiguientes operaciones:
            - Muestra el total de valores que contiene
            - Sitúa el puntero en el primer elemento del array y muestra el valor actual, es decir, donde está elpuntero actualmente.
            - Avanza una posición y muestra el valor actual.
            - Coloca el puntero en la última posición y muestra su valor.
            - Retrocede una posición y muestra este valor.
         */

            $deportes=[
                "futbol","baloncesto","natacion","tenis"
            ];

            for ($i=0; $i < sizeof($deportes) ; $i++) { 
                echo "Deportes [$i] = $deportes[$i] <br>";
            }

            $total=count($deportes);
            echo "<b>El total de deportes contenidos en el array es $total</b><br>";

            $primerElemento=current($deportes);
            echo "<b>El primer elemento en el array es $primerElemento</b><br>";

            $avanza=next($deportes);
            echo "<b>El siguiente elemento en el array es $avanza</b><br>";

            $ultimo=end($deportes);
            echo "<b>El último elemento en el array es $ultimo</b><br>";

            $prev=prev($deportes);
            echo "<b>El anterior elemento en el array es $prev</b><br>";

        ?>
    </div>
    </body>
</html>