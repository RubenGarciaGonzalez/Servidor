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
        <h3 class="text-center">Ejercicio 10</h3>
        <?php
            /*
            Dado el siguiente array: $nombres = array (‘roberto’,’juan’,’marta’,’moria’,’martin’,’jorge’,’miriam’,’nahuel’,’mirta’).
            Realizar un programa en PHP que lo recorra y genere un nuevo array con
            aquellos nombres que comiencen con la letra m. Definir qué bucle conviene
            usar y luego mostrar el array por pantalla sin usar var_dump ni print_r. Los
            nombres deben aparecer separados por coma.
            */
            $nombres=array('roberto','juan','marta','moria','martin','jorge','miriam','nahuel','mirta');
            $nombresPorM=array();
            $contador=0;

            foreach ($nombres as $i) {
                if ($i[0]=='m') {
                    $nombresPorM[$contador] = $i;
                    $contador++;
                }
            }

            foreach ($nombresPorM as $key => $value) {
                echo $value;
                if (count($nombresPorM)-1 != $key) {
                    echo ', ';
                }else{
                    echo '. ';  
                }
            }

        ?>
    </div>
    </body>
</html>