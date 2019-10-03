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
        <h3 class="text-center">Ejercicio 4</h3>
        <form class="text-center" name="formulario"method="get"action="">
           frase: <input type="text"name="frase"value="">
           <input type="submit"/>
        </form>
        <?php   
        /*
        Realiza una página PHP en la que se introduzca una frase en una variable. Muestra por pantalla
        las dos primeras palabras de esa frase.
        */
        $frase=$_GET['frase'];
        echo $frase;
        $nuevaFrase=explode(' ',$frase);
        echo "<br>";
        for ($i=0; $i < 2 ; $i++) { 
            echo "'$nuevaFrase[$i]'| ";
        }
        ?>
    </div>
    </body>
</html>