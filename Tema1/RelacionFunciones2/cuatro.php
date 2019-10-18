<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    </head>
    <title>Relación Funciones de PHP nº2</title>
    <?php

        function calculoIva($precio,$porcentaje){
            if(is_numeric($precio)){
                if (empty($porcentaje)) {
                    echo "<br><p class='text-center'>Como usted no ha pasado ningún porcentaje, se aplicará por defecto el <b>18%</b>de IVA</p><br>";
                    $porcentaje=18;
                    $total=$precio + ($porcentaje*($precio/100));
                    echo "<p class='text-center'>El resultado total es <b>$total</b></p>";                    
                }else{
                    $total=$precio + ($porcentaje*($precio/100));
                    echo "<p class='text-center'>El resultado total es <b>$total</b></p>";
                }
            }
            
        }
    ?>
</head>
<body style="background-color:#5d99c6"> 
    <div class="container, mt-4 text-center">
        <h3 class="text-center">Ejercicio 4</h3>
        <?php
            /*
            4.- Realiza una función que calcula el IVA y que recibe dos parámetros. Uno el valor sobre el que se
            calcula y orro el porcentaje a aplicar. Si no se indica el porcentaje se entenderá que es del 18%.
            */

            $precio = '';
            if (!empty($_POST['precio'])) {
                $precio = $_POST['precio'];
            }
            $porcentaje = '';
            if (!empty($_POST['porcentaje'])) {
                $porcentaje = $_POST['porcentaje'];
            }
        
            echo "<form method='post' name='formulario' action='cuatro.php'>";
            echo "Introduzca el valor:<input type='text' name='precio' required><br>";
            echo "Introduzca el porcentaje a aplicar:<input type='text' name='porcentaje'><br>";
            echo "<input type='submit' value='Enviar'>";
            echo "</form>";

            calculoIva($precio,$porcentaje);

        ?>
    </div>
    </body>
</html>