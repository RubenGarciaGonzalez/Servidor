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
        <h3 class="text-center">Ejercicio 10</h3>
        <?php
        /*
        Tenemos el array siguiente:
        “Luis”, “Ana”, “Lucas”, “Zacarias”, “Tomas”, “Juan”, “Ginesa”, “Oscar”
        Mustra el array resultante al aplicarle al anterior sort(), rsort(), asort(), arsort()
        */

        $array=[
            "Luis",
            "Ana",
            "Lucas",
            "Zacarias",
            "Tomas",
            "Juan",
            "Ginesa",
            "Oscar"
        ];

        echo "Mediante el método <b>sort()</b><br>";
        sort($array);
        $arraylength = count($array);
        for($x = 0; $x < $arraylength; $x++) {
            echo $array[$x];
            echo "<br>";
        }
        echo "<hr>";
        echo "Mediante el método <b>rsort()</b><br>";
        rsort($array);
        $arraylength = count($array);
        for($x = 0; $x < $arraylength; $x++) {
            echo $array[$x];
            echo "<br>";
        }
        echo "<hr>";
        echo "Mediante el método <b>asort()</b><br>";
        asort($array);
        $arraylength = count($array);
        for($x = 0; $x < $arraylength; $x++) {
            echo $array[$x];
            echo "<br>";
        }
        echo "<hr>";
        echo "Mediante el método <b>arsort()</b><br>";
        arsort($array);
        $arraylength = count($array);
        for($x = 0; $x < $arraylength; $x++) {
            echo $array[$x];
            echo "<br>";
        }

        ?>
    </div>
    </body>
</html>