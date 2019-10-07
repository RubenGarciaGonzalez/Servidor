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
        <h3 class="text-center">Ejercicio 2</h3>
        <?php
           /*
           Imprime los valores del array asociativo siguiente usando la estructura de control foreach:
            $v[1]=90;
            $v[30]=7;
            $v['e']=99;
            $v['hola']=43;
           */
          
           $array=[
               1=>90,
               30=>7,
               "e"=>99,
               "hola"=>43
           ];

           foreach ($array as $k => $v) {
            echo "\$array[$k]=".$v."<br>";
           }   
        ?>
    </div>
    </body>
</html>