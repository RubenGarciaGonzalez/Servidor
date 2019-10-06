<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    </head>
    <title>Relación de cadenas en PHP nº1</title>
</head>
<body style="background-color:#5d99c6"> 
    <div class="container, mt-4">
        <h3 class="text-center">Ejercicio 2</h3>
        <?php
           $correo="rubengg_00@hotmail.com";
           echo "El correo dado es $correo<br>";
           if (substr_count($correo,"@") == 1 && substr_count($correo,".")== 1) {
               echo "El correo es válido<br>";
               echo "El nombre del correo es <b>".strchr($correo,"@",true)."</b><br>";
               echo "El nombre del dominio es <b>".strchr($correo,"@")."</b><br>";  
           }else{
               echo "El correo NO es válido";
           }
        ?>
    </div>
    </body>
</html>