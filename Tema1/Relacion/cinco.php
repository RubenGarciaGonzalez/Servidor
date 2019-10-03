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
        <h3 class="text-center">Ejercicio 5</h3>
        <form class="text-center" name="formulario"method="get"action="">
            frase1: <input type="text"name="frase1"value="">
            <input type="submit"/>
        </form>
        <?php
            $frase1=$_GET['frase1'];
            $letras=substr_count($frase1, "a");
            echo "<br>";
            echo $letras;
        ?>
    </div>
    </body>
</html>