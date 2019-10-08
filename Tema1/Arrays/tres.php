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
        <div class="container">
        <?php
            //Como cortar arrays array_slice
            $array=["uno","dos","tres","cuatro","cinco","seis"];
            $res=array_slice($array,3); //Solo un parámetro
            echo "<br>";
            print_r($res); //Mostrará cuatro, cinco,seis.
            echo "<br>";
            $res=array_slice($array,2,3); //Dos parámetros
            print_r($res); //Mostrará tr,cua,cin
            echo "<br>";
            $res=array_slice($array,-5,2); 
            print_r($res);
            echo "<br>";
            //------------ARRAY CHUNCK DIVIDIR ARRAYS EN VARIOS
            $res=array_chunk($array,4);
            print_r($res);
            echo "<br>";
            //PARA GUARDAR LAS KEYS
            $res=array_chunk($array,4,true);
            print_r($res);




        ?>
    </div>
    </body>
</html>