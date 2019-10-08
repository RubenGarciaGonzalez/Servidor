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
        <h3 class="text-center">Ejercicio 11</h3>
        <?php
        /*
        Tenemos el array
        “nombre”=>”Juan”, “Manuel”, 1=>”Pepe”, 5=>”Dario”, “Ines”, “Manolo”, “cosa”=>”Television”
        a) Guardar en un array las keys de array anterior y muestralo
        b) Guardar los valores del array anterior en otro array y muestralo 
        */

        $array=[
            "Nombre"=>"Juan","Manuel",
            1=>"Pepe",
            5=>"Dario","Ines","Manolo",
            "Cosa"=>"Television"
        ];

        echo "<b>Keys del array anterior:</b><br>";
        foreach($array as $key => $val) {
            $nuevoArray=array($key);
        }
        foreach ($nuevoArray as $k => $v) {
            echo "\$nuevoArray[$k]=".$v."<br>";
        }



        ?>
    </div>
    </body>
</html>