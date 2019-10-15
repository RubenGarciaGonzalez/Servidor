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
        <h3 class="text-center">Ejercicio 1</h3>
        <?php
           /*
           Almacena en un array los 10 primeros números pares. Imprímelos cada uno en una línea.
           */

          for ($i=1;$i<10;$i++){
            $v[$i]=$i*2;  
          }
          for ($i=1;$i<sizeof($v);$i++){
            echo "\$v[$i]=".$v[$i]."<br>";
          }
          
        ?>
    </div>
    </body>
</html>