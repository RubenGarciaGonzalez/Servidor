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
        <h3 class="text-center">Ejercicio 14</h3>
        <?php
           /*
            Implementa un array asociativo con los siguientes valores:
            $estadios_futbol = array(“Barcelona” => “Camp Nou”, “Real Madrid” => “Santiago Bernabeu”,“Valencia” => “Mestalla”,
            “Real Sociedad” => “Anoeta”);
            
            Muestra los valores del array en una tabla, has de mostrar el índice y el valor asociado.
            Elimina el estadio asociado al Real Madrid.Vuelve a mostrar los valores para comprobar que el valor
            ha sido eliminado, esta vez en una listanumerada
           */

           $estadios_futbol=array("Barcelona"=>"Camp Nou", "Real Madrid" => "Santiago Bernabeu", "Valencia"=>"Mestalla","Real Sociedad"=>"Anoeta");

           echo "<table border='1px' align='center' cellpadding='10'>";
            echo "<thead>";
               echo "<tr>";
                    foreach ($estadios_futbol as $key) {
                        echo "<th>".$key."</th>";
                    }
                echo "</tr>";
            echo "</thead>";
            echo "<tbody>";
                    foreach ($estadios_futbol as $value){
                         echo "<tr>";
                         foreach($value as $v)
                        {
                             echo "<td>".$v."</td>";
                        }
                    } 
                     echo "</tr>";
            echo "</tbody>";
        echo "</table> ";        
        ?>
    </div>
    </body>
</html>