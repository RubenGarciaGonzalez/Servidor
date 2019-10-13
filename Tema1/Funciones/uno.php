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

        //func_get_arg , func_get_args, func_num_args
        function suma(){
            if (func_num_args()==0) {
                return "<br>Error, nada que sumar!!!!<br>";
            }
            $acum=0;
            for ($i=0; $i < func_num_args() ; $i++) { 
                $acum=func_get_arg($i);
            }

            return $acum;
        }

        function suma1(){
            if (func_num_args()==0) {
                return "<br>Error, nada que sumar!!!!<br>";
            }
            $acum=0;
           foreach (func_get_args() as $k => $v) {
               $acum+=$v;
           }

            return $acum;
        }

        function info(){
            echo "Has pasado ". func_num_args(). " Parámetros<br>";
            echo "Los parametros son :<br>";
            echo "<ol>";
            for ($i=0; $i <func_num_args() ; $i++) { 
                echo "<li>".func_get_arg($i);
            }
            echo "</ol>";
            echo print_r(func_get_args());
        }

        //---------------------------------------------
        function prueba(){
            global $var;
            echo $var;
        }

        function prueba1(){
            echo $GLOBALS['var'];
        }

        function incremento(){
            static $a=1;
            return $a++;
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
            saludo();
            //saludo1();
            //------------------------------Funciones con un numero variable de parametros
            suma();
            echo "La suma es: ".suma(5)."<br>";//5
            echo "La suma es: ".suma(2,4)."<br>";//6
            echo "La suma es: ".suma(2,4,5)."<br>";//11
            echo "La suma es: ".suma(2,4,4,8)."<br>";//18
            echo "<br>";
            //-------------------------------------
            suma1();
            echo "La suma es: ".suma1(5)."<br>";//5
            echo "La suma es: ".suma1(2,4)."<br>";//6
            echo "La suma es: ".suma1(2,4,5)."<br>";//11
            echo "La suma es: ".suma1(2,4,4,8)."<br>";//18
            echo "<br>";
            //---------------------------------------------
            info();
            info("Hola","Adios",3,4,5);
            //------------
            //Ambito de variables
            //Locales, locales estaticas, globales
            echo "<br>-------------------------------------<br>";
            $var=123;
            prueba();
            echo "<br>-------------------------------------<br>";
            prueba1();
            echo "<br>---------------------------<br>";
            echo incremento(). "<br>";
            echo incremento(). "<br>";
            echo incremento(). "<br>";


        ?>
    </div>
</body>
</html>