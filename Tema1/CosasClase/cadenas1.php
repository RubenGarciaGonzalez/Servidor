<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    </head>
    <title>Relación de cadenas en PHP nº1</title>
</head>
<body>
<body style="background-color:#5d99c6">
    <div class="container, mt-4">
        <h3 class="text-center">Ejercicio 1</h3>
        <?php
            /*
            Realiza una página PHP en la que introduzca dos palabras en dos variables y diga si riman o no.
            Si coinciden las tres últimas letras tiene que decir que riman. Si coinciden sólo las dos últimas
            tiene que decir que riman un poco y si no, que no riman. Recuerda que las palabras rimarán
            independientemente de que se escriban con mayúsculas o minúsculas.
            */
            
            if (isset($_GET['palabra1'])&& ($_GET['palabra2'])) {
                //Nos ha llegado primo por get
                $palabra1=$_GET['palabra1'];
                $palabra2=$_GET['palabra2'];
                echo "<p align='center' class='text-center,text-info'>La primera palabra es $palabra1</p>";
                echo "<p align='center' class='text-center,text-info'>La segunda palabra es $palabra2</p><br>";
                if (substr($palabra1,-3)==substr($palabra2,-3)) {
                    echo "<p align='center' class='text-center,text-info'>Las palabras $palabra1 y $palabra2 riman</p>";
                }else{
                    if (substr($palabra1,-2)==substr($palabra2,-2)) {
                        echo "<p align='center' class='text-center,text-info'>Las palabras $palabra1 y $palabra2 riman un poco</p>";
                    }else{ 
                       echo "<p align='center' class='text-center,text-info'>Las palabras $palabra1 y $palabra2 no riman</p>";
                    }
                }
            }else{
                echo "<p align='center' class='text-center, text-danger'>";
                echo "No has pasado por GET las dos palabras a comprobar!!!";
                echo "</p>";
            }
        ?>
    </div>
    <hr>
     
    <div class="container, mt-4">
        <h3 class="text-center">Ejercicio 2</h3>
        
    </div>
    <hr>
    <div class="container, mt-4">
        <h3 class="text-center">Ejercicio 3</h3>
        <?php

        ?>
    </div>
    <hr>
    <div class="container, mt-4">
        <h3 class="text-center">Ejercicio 4</h3>
        <form class="text-center" name="formulario"method="get"action="">
            frase: <input type="text"name="frase"value="">
            <input type="submit"/>
        </form>
        <?php
        /*
        Realiza una página PHP en la que se introduzca una frase en una variable. Muestra por pantalla
        las dos primeras palabras de esa frase.
        */
        $frase=$_GET['frase'];
        echo $frase;
        $nuevaFrase=explode(' ',$frase);
        echo "<br>";
        for ($i=0; $i < 2 ; $i++) { 
            echo "'$nuevaFrase[$i]'| ";
        }
        ?>
    </div>
    <hr>
    <div class="container, mt-4">
        <h3 class="text-center">Ejercicio 4</h3>
        <form class="text-center" name="formulario"method="get"action="">
            frase1: <input type="text"name="frase1"value="">
            <input type="submit"/>
        </form>
        <?php
            $frase1=$_GET['frase1'];
            $letras=substr_count($frase1, "a");
            echo "<br>";
            echo $letras;
        ?>
    </div>
</body>
</html>