<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    </head>
    <title>Relación Funciones de PHP nº2</title>
    <?php

    function mesDia($mes,$dia){

        if ($mes<1 && $mes>12 || $dia<1 && $dia>7) {
            echo "<h2 class='text-center text-danger'>ERROR!!! LOS NÚMEROS NO CONCUERDAN CON LOS PARÁMETROS ESTABLECIDOS</h2>";
        }else{
            $meses=[
                1=>"Enero",
                2=>"Febrero",
                3=>"Marzo",
                4=>"Abril",
                5=>"Mayo",
                6=>"Junio",
                7=>"Julio",
                8=>"Agosto",
                9=>"Septiembre",
                10=>"Octubre",
                11=>"Noviembre",
                12=>"Diciembre"
            ];

            $dias=[
                1=>"Lunes",
                2=>"Martes",
                3=>"Miércoles",
                4=>"Jueves",
                5=>"Viernes",
                6=>"Sábado",
                7=>"Domingo"
            ];

            foreach ($meses as $k => $v) {
                if ($k==$mes) {
                    $resultado=$v;
                }
            }

            foreach ($dias as $k1 => $v1) {
                if ($k1==$dia) {
                    $resultado1=$v1;
                }
            }

            echo "<h4 class='text-center'>El mes es $resultado y el día es $resultado1</h4>";

        }

    }

        
    ?>
</head>
<body style="background-color:#5d99c6"> 
    <div class="container, mt-4">
        <h3 class="text-center">Ejercicio 3</h3>
        <?php
            /*
            Crearemos una función que pasado un número entre 1 y 12 me de el mes correspondiente y si le paso
            además un numero entre 1 y 7 el día de la semana. La función guardará un array con los meses y otro
            con los días de la semana. Ejemplo funcion(1,2) devuelve Enero y Martes, función(12,5) devuelve 
            Diciembre y Viernes. Error si no ajusto los índices entre 1 y 12 y entre 1 y 7.
            */

            $mes=5;
            $dia=3;

            mesDia($mes,$dia);

        ?>
    </div>
    </body>
</html>