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
        <h3 class="text-center">Ejercicio 9</h3>
        <?php
           /*
            Crea   un   array   llamado   “lenguajes_cliente”   y   otro   “lenguajes_servidor”,   crea   tu   mismo   losvalores,
            poniendo índices alfanuméricos  a cada valor. Junta ambos arrays en uno solo llamado“lenguajes” y muéstralo por pantalla
            en una tabla.
           */

           $lenguaje_cliente=["1L","2F","4M","9P"];
           $lenguaje_servidor=["7A","5B","10G","8J"];
           $fusion=array_merge($lenguaje_cliente,$lenguaje_servidor);
           print_r($fusion);
            
        ?>
    </div>
    </body>
</html>