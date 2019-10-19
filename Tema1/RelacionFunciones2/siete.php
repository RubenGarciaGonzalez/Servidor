<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    </head>
    <title>Relación Funciones de PHP nº2</title>
    <?php

        function mayorNumeros(){
            $numeroArgumentos=func_get_args();
            if ($numeroArgumentos==null) {
                echo "<h4 class='text-center text-danger'>ERROR!!!</h4>";   
            }else{
                echo "El array pasado es :<br>";
                print_r($numeroArgumentos);
                echo "<br>";
                $numMayor=$numeroArgumentos[0];
                while (next($numeroArgumentos)) {
                    if (pos($numeroArgumentos)>$numMayor) {
                        $numMayor=pos($numeroArgumentos);
                    }
                }
                echo "El mayor número de todos es $numMayor";
            }
        }

        
            
    ?>

</head>
<body style="background-color:#5d99c6"> 
    <div class="container, mt-4 text-center">
        <h3 class="text-center">Ejercicio 7</h3>
        <?php
            /*
            Implementaremos una función a la que pasaremos un número variable de argumentos (números),
            mostraremos los números pasados y el mayor de todos, si no pasamos ningun argumento, error.
            */


            mayorNumeros(15,2515,1321,32,98751,12356,987656,1231,5465,3213,748);




        ?>
    </div>
    </body>
</html>