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
        <h3 class="text-center">Ejercicio 3</h3>
        <?php
            /*
            Crea un array de dos dimensiones, de manera que en una dimensión contenga el tipo de colores
            (fuerte o suave) y en la otra 3 colores de cada tipo. Muestra una tabla como la siguiente
            recorriendo el array:
            */

            $colores=array(
                array("#FF0000","#00FF00","#0000FF"),
                array("#FE9ABC","#FDF189","#BC8F8F")    
            );
        ?>
        <br>
        <table border='1px' align='center' cellpadding="10">
            <tbody>
                <?php
                    foreach ($colores as $array){
                         echo "<tr>";
                         foreach($array as $array)
                        {
                             echo "<td style='background-color:$array'>".$array."</td>";
                        }
                     echo "</tr>";
                    }
                ?>
            </tbody>
        </table> 
    </div>
    </body>
</html>