<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    </head>
    <title>Documento funciones</title>
    <?php
        function saludo($var="Incognito"){
            echo "<p class='text-center'>Hola $var</p>";
        }
        function maximo($a, $b){
            return($a>=$b) ? $a:$b;
        }
        //Rellenar aleatoriamente un array de f filas y c columnas
        function rellenarArray(&$m,$f,$c){ // array, filas, columnas
            for ($i=0; $i < $f ; $i++) { 
                for ($j=0; $j < $c; $j++) { 
                    $m[$i][$j]=rand(1,100);
                }
            }
            
        }
        function pintarArray($m){
            echo "<table border='1' align='center' cellpadding='5'>";
            for ($f=0; $f < count($m) ; $f++) { 
                echo "<tr align='center'>";
                for ($c=0; $c < count($m[$f]); $c++) { 
                    echo "<td>".$m[$f][$c]."</td>";
                }
                echo "</tr>";
            }
        }
        //--------------------------------------------------
        function referencia($a){
            $a=123;
            echo "<br>Es la funcion \$a=".$a;
        }

        function saludo1($var1,$var2="No me dices el nombre"){
            echo "<p class='text-center'>Hola $var1 y hola $var2</p>";
        }


    ?>
</head>
<body>
    <div class="container mt-5">
        <?php
            echo saludo("Juan");
            echo saludo("Pepe");
            echo "El máximo de 45 y 90 es : ".maximo(45,90)."<br>";
            //--------------------------------------------------------
            //----------------------
            rellenarArray($matriz1,8,4);
            var_dump($matriz1);
            //------------------------------
            $a=10;
            referencia($a);
            echo "<br>Fuera de la funcion \$a=$a";
            //-------------------------------------------
            pintarArray($matriz1);
            echo "<br>";

            //Funciones con un valor por defecto
            saludo("Perico");
            saludo();
            echo "<br>SALUDO1</br>";
            //-------------------------
            saludo1("Pepe","Ana");
            saludo1("Pepe");
            saludo1();

        ?>
    </div>
</body>
</html>