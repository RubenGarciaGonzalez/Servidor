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
            Dado el array anterior comprueba si en él se encuentra el color “FF88CC” y el color “FF0000” usando la función in_array.
            */

            $colores=array(
                array("#FF0000","#00FF00","#0000FF"),
                array("#FE9ABC","#FDF189","#BC8F8F")    
            );

            if (in_array(array('#FF88CC'),$colores)==true) {
                echo "El color #FF88CC existe<br>";
             }else{
                 echo "El color #FF88CC no existe<br>";
            }

            if (in_array(array("#FF0000"),$colores)==true) {
                echo "El color #FF0000 existe<br>";
             }else{
                 echo "El color #FF0000 no existe<br>";
            }

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
        <?php 
           

        ?>
    </div>
    </body>
</html>