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
        <h3 class="text-center">Ejercicio 12</h3>
        <?php
           /*
            Realiza el ejercicio anterior pero utilizando la función array_push()
           */

            $array1=[
                "Lagartija","Araña","Perro","Gato","Raton"
            ];

            $array2=[
                "12","34","45","52","12"
            ];

            $array3=[
                "Sauce","Pino","Naranjo","Chopo","Perro","34"
            ];

            array_push($array1,$array2,$array3);

            print_r($array1);
            
        ?>
    </div>
    </body>
</html>