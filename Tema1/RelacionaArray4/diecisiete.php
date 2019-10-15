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
        <h3 class="text-center">Ejercicio 17</h3>
        <?php
           /*
            Crea un array multidimensional para poder guardar los componentes de dos familias: “LosSimpson” y “Los Griffin”
            dentro de cada familia ha de constar el padre, la madre y los hijos, dondepadre, madre e hijos serán los índices
            y los nombres serán los valores.
            Familia “Los Simpson”: padre Homer, madre Marge, hijos Bart, Lisa y Maggie.
            Familia “Los Griffin”: padre Peter, madre Lois, hijos Chris, Meg y Stewie
            Muestra los valores de las dos familias en una lista no numerada.
           */

           $familias=array(
               $losSimpsons=[
                    "Padre"=>"Homer",
                    "Madre"=>"Marge",
                    "Hijos"=>"Bart","Lisa","Maggie"
               ],

               $losGriffin=[
                   "Padre"=>"Peter",
                   "Madre"=>"Lois",
                   "Hijos"=>"Chris","Meg","Stewie"
               ]
            );

            echo "<ul>";
                foreach ($familias as $familia) {
                    foreach ($familia as $k => $v) {
                        echo "<li>".$k."=>".$v."</li>";
                    }
                }
            echo "</ul>";



        ?>
    </div>
    </body>
</html>