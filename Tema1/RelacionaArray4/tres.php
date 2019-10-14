<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    </head>
    <title>Relación de arrays en PHP nº1</title>
</head>
<body style="background-color:#5d99c6"> 
    <div class="container, mt-4">
        <h3 class="text-center">Ejercicio 3</h3>
        <?php
          /*
            Realizar un programa que muestre las películas que se han visto. Crear un array que contenga los
            meses de enero, febrero, marzo y abril, asignando los valores 9, 12, 0 y 17, respectivamente. Si en alguno
            de los meses no se ha visto ninguna película, no ha de mostrar la información de ese mes.
          */

          $peliculas=[
              "Enero"=>9,
              "Febrero"=>12,
              "Marzo"=>0,
              "Abril"=>17
          ];
          
          foreach ($peliculas as $k => $v) {
              if ($v!=0) {
                echo "\$peliculas[$k]=".$v."<br>";
              }
          }   

        ?>
    </div>
    </body>
</html>