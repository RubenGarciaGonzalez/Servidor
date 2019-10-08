<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    </head>
    <title>Relación de arrays en PHP nº1</title>
</head>
<body style="background-color:#5d99c6"> 
    <div class="container, mt-4">
        <h3 class="text-center">Ejercicio 9</h3>
        <?php

    $articulos=[
        $articulo1=[
            "Nombre"=>"Bombilla",
            "PVP"=>23.4,
            "Tipo"=>"Electricidad",
            "Stock"=>45
        ],
        $articulo2=[
            "Nombre"=>"Brasero",
            "PVP"=>123.4,
            "Tipo"=>"Electricidad",
            "Stock"=>4
        ],
        $articulo3=[
            "Nombre"=>"Monitor LED 19'",
            "PVP"=>203.4,
            "Tipo"=>"Informática",
            "Stock"=>5
        ],
        $articulo4=[
            "Nombre"=>"Tablet 10'",
            "PVP"=>123.4,
            "Tipo"=>"Informática",
            "Stock"=>45
        ],
    ];

        ?>
        <!--a) Muestra los datos en una salida por tabla:-->

        <table border='1px' align='center' cellpadding="10">
            <thead>
                <tr>
                <?php
                    $categorias=["Nombre","PVP","Tipo","Stock"];   
                    foreach ($categorias as $v) {
                        echo "<th>".$v."</th>";
                    }
                ?>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach ($articulos as $articulo1){
                         echo "<tr>";
                         foreach($articulo1 as $articulos2)
                        {
                             echo "<td>".$articulos2."</td>";
                        }
                     echo "</tr>";
                    }
                ?>
            </tbody>
        </table>        
    </div>
    </body>
</html>