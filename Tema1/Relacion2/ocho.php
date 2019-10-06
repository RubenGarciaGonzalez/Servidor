<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    </head>
    <title>Relación de cadenas en PHP nº2</title>
</head>
<body style="background-color:#5d99c6"> 
    <div class="container, mt-4">
        <h3 class="text-center">Ejercicio 8</h3>
        <?php
        $frase="Esta cadena tiene muchas letras";
        echo "La frase es : <b>$frase</b><br>";
        echo "La posición de la primera ocurrencia de la letra 'a' es <b>".strpos($frase,"a")."</b>.<br>";
        echo "La posición de la primera ocurrencia de la letra 'm' es <b>".strpos($frase,"m")."</b>.<br>";
        echo "La posición de la primera ocurrencia de la palabra 'tiene' es <b>".strpos($frase,"tiene")."</b>.<br>";
        echo "La primera ocurrencia desde el final de la letra 'a' es <b>".strrpos($frase,"a")."</b>.<br>";
        echo "La frase desde la aparición de la palabra 'cadena' hasta el final es: <b>".strstr($frase,"cadena")."</b>.<br>";
        echo "La cadena desde el carácter 12 hasta el final: <b>".substr($frase,12)."</b>.<br>";
        echo "La cadena devolviendo 6 caracteres desde el carácter 18: <b>".substr($frase,18,6)."</b><br>";
        echo "La cadena devolviendo los 6 últimos caracteres: <b>".substr($frase,-6)."</b><br>";
        echo "La cadena desde la posición 26, contando desde atrás, 6 caracteres: <b>".substr($frase,-26,6)."</b></br>";
        echo "La cadena empezando en el carácter 4 y terminando en el 7 desde atrás: <b>".substr($frase,4,-7)."</b></br>";
        ?>
    </div>
    </body>
</html>