<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    </head>
    <title>Relación de array en PHP nº2</title>
</head>
<body style="background-color:#5d99c6"> 
    <div class="container, mt-4">
        <h3 class="text-center">Ejercicio 5</h3>
        <?php
            /*
            Crea un array llamado pila como éste:
            $pila = array(“cinco” => 5, “uno”=>1, “cuatro”=>4, “dos”=>2, “tres”=>3);
            Muestra el array ordenado por asort, arsort, ksort, sort, rsort.
            */
            $pila=array("cinco" => 5, "uno"=>1, "cuatro"=>4, "dos"=>2, "tres"=>3);
            
            echo "<b>Mostrando \$pila con método asort</b><br>";
            asort($pila);
            foreach ($pila as $k => $v) {
                echo "\$pila[$k]=".$v."<br>";
            }
            echo "<br>";
            echo "<b>Mostrando \$pila con método arsort</b><br>";
            arsort($pila);
            foreach ($pila as $k => $v) {
                echo "\$pila[$k]=".$v."<br>";
            }
            echo "<br>";
            echo "<b>Mostrando \$pila con método ksort</b><br>";
            ksort($pila);
            foreach ($pila as $k => $v) {
                echo "\$pila[$k]=".$v."<br>";
            }
            echo "<br>";
            echo "<b>Mostrando \$pila con método sort</b><br>";
            sort($pila);
            foreach ($pila as $k => $v) {
                echo "\$pila[$k]=".$v."<br>";
            }
            echo "<br>";
            echo "<b>Mostrando \$pila con método rsort</b><br>";
            rsort($pila);
            foreach ($pila as $k => $v) {
                echo "\$pila[$k]=".$v."<br>";
            }
            echo "<br>";

        ?>
    </div>
    </body>
</html>