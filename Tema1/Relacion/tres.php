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
        <h3 class="text-center">Ejercicio 3</h3>
        <?php
           $correo="ruben00@gmail.com";
           echo "El correo dado es <b>$correo</b><br>";
           function comprobacion($correo){
            if (strlen($correo)<3 || strlen($correo)>20){
               echo $correo . " no es válido<br>";
               return false;
            }
            $caracteresPermitidos = "abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ0123456789-_";
            for ($i=0; $i<strlen($correo); $i++){
               if (strpos($correo, $caracteresPermitidos)){
                  echo $correo . " no es válido<br>";
                  return false;
               }
            }
            echo $correo . " es válido<br>";
            return true;
         } 
         comprobacion($correo);
           
        ?>
    </div>
    </body>
</html>