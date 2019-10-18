<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    </head>
    <title>Relación Funciones de PHP nº2</title>
    <?php

        
    ?>
</head>
<body style="background-color:#5d99c6"> 
    <div class="container, mt-4">
        <h3 class="text-center">Ejercicio 6</h3>
        <?php
            
            echo '<p>El valor actual de la variable $contar es: ' . contar() . '</p>';
            echo '<p>El valor actual de la variable $contar es: ' . contar() . '</p>';
            echo '<p>El valor actual de la variable $contar es: ' . contar() . '</p>';
            echo '<p>El valor actual de la variable $contar es: ' . contar1() . '</p>';
            echo '<p>El valor actual de la variable $contar es: ' . contar1() . '</p>';
            echo '<p>El valor actual de la variable $contar es: ' . contar1() . '</p>';
            echo '<p>El valor actual de la variable $contar es: ' . contar1() . '</p>';
            function contar(){
                static $contar;
                $contar++;
                return $contar;
            } 
            function contar1(){
                $contar;
                $contar++;
                return $contar;
            }

            /*
            La variable no funciona en la funcion contar1 porque, al ser declarada en la funcion contar() de forma estática
            , la vaiable solo funciona de forma local en ese método.
            */


        ?>
    </div>
    </body>
</html>