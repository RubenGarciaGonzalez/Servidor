<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    </head>
    <title>Relación de array en PHP nº3</title>
</head>
<body style="background-color:#5d99c6"> 
    <div class="container, mt-4">
        <h3 class="text-center">Ejercicio 5</h3>
        <?php
            /*
            Dado el siguiente array:
            $paises = array (    'alemania',    'brasil',    'italia',    'chile',    'uruguay',    'australia');
            Se pide lo siguiente
            1.Eliminar los elementos ‘alemania’, ‘italia’ y ‘australia’
            2.Insertar los elementos ‘argentina’ y ‘bolivia’
            3.Ordenar por orden alfabético el array
            4.Mostrar el resultado por pantalla con print_rEste es muy fácil si tenemos presentes las funciones de la clase teórica.
            Primero se hace la definición que está ya hecha en el enunciado. Luego se eliminan con la funciónunsetaquellos elementos
            que se piden. A continuación, se agregan los dos que se piden, se ordenan consorty finalmente se muestra por pantalla 
            conprint_r.
            */
            
            $paises = array (
                'alemania',
                'brasil',
                'italia',
                'chile',
                'uruguay',
                'australia'
            );
            echo "<b>El array es: </b><br>";
            print_r($paises);
            echo "<br>";
            //1)
            echo "<b>1) Eliminar los elementos alemania, italia y australia</b><br>";
            unset($paises[0],$paises[2],$paises[5]);
            print_r($paises);
            echo "<br>";
            //2)
            echo "<b>2) Insertar los elementos ‘argentina’ y ‘bolivia’</b><br>";
            array_push($paises,'argentina','bolivia');
            print_r($paises);
            echo "<br>";
            //3)
            echo "<b>3) Ordenar por orden alfabético el array</b><br>";
            sort($paises);
            //4)
            echo "<b>4) Mostrar el resultado por pantalla con print_r. Este es muy fácil si tenemos presentes las funciones de la clase teórica.
            Primero se hace la definición que está ya hecha en el enunciado. Luego se eliminan con la funciónunsetaquellos elementos
            que se piden. A continuación, se agregan los dos que se piden, se ordenan con sort y finalmente se muestra por pantalla 
            con print_r.</b><br>";
            print_r($paises);
            
            
        ?>
    </div>
    </body>
</html>