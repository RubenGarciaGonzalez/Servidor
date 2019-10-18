<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    </head>
    <title>Relación Funciones de PHP nº2</title>
    <?php

        function operacion($base,$exp){

            if($base>0 && $exp>=0){
                if ($exp==0) {
                    $resultado=1;
                    echo "<p class='text-center'>El resultado de la potencia es $resultado</p>";
                }else if ($exp%2==0) {
                    $resultado=pow($base,$exp/2) * pow($base,$exp/2);
                    echo "<p class='text-center'>El resultado de la potencia es $resultado</p>"; 
                }else{
                    $resultado=pow($base,($exp-1)/2) * pow($base,($exp-1)/2) * $base;
                    echo "<p class='text-center'>El resultado de la potencia es $resultado</p>"; 
                }     
            }else{
                echo "<p class='text-center text-danger'>ERROR!!!</p>";
            }
        
        }
            
    ?>

</head>
<body style="background-color:#5d99c6"> 
    <div class="container, mt-4 text-center">
        <h3 class="text-center">Ejercicio 5</h3>
        <?php
            /*
            La función potencia de dos números m^n enteros es igual a: atención con caso base y recursivo
            Implementar una función recursiva para calcular la potencia de dos enteros positivos pasados como
            parámetros.
            */

            $base = '';
            if (!empty($_POST['base'])) {
                $base = $_POST['base'];
            }
            $exp = '';
            if (!empty($_POST['exp'])) {
                $exp = $_POST['exp'];
            }
        
            echo "<form method='post' name='formulario' action='cinco.php'>";
            echo "Introduzca la base:<input type='text' name='base' required><br>";
            echo "Introduzca el exp :<input type='text' name='exp' required><br> ";
            echo "<input type='submit' value='Enviar'>";
            echo "</form>";

            operacion($base,$exp);

        ?>
    </div>
    </body>
</html>