<!DOCTYPE html>
<html lang="es">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    </head>
        
    </head>
    <body style='background-color:bisque'>
    <div class="container mt-5">
    <h4 class='text-center'>Ejemplo Funciones de cadenas</h4>
    <?php
        $cadena="Hola Mundo";
        echo "La longitud de \"$cadena\" es:".strlen($cadena);
        echo "<br>";
        for ($i=0; $i < strlen($cadena); $i++) { 
            echo $cadena[$i]."-";
        }

        echo "<br>Ejemplo strstr()</br>";
        echo strstr($cadena, "la");
        $mail="pepito@gmail.com";
        echo strstr($mail, "@");
        echo "<br>";
        //-------------------
        echo "<br>Ejemplo strpos()<br>";
        echo strpos($cadena,"o",3);
        echo "<br>Ejemplo strspn(cadena, máscara)<br>";
        $cadena="América fue descubierta en 1492";
        $cadena1="1942 fue el año de descubrimiento";
        echo "strspn de $cadena con máscara=1234567890<br>";
        echo strspn($cadena, "1234567890");
        echo "<br>";
        echo "strspn de $cadena1 con máscara=1234567890<br>";
        echo strspn($cadena1,"1234567890");
        echo "<br>";
        //----------------------------------------------
        echo strspn($cadena,"Aabcdefghijklmnopqrstuvwxyz ");
        //----------------------------------------------
        echo "<br>Ejemplo de strcspn(cad, máscara)<br>";
        $cadena="La expo fue en 1992";
        echo "Vemos lo que vale strcspn(\$cadena, 1234567890) donde \$cadena=$cadena<br>";
        echo strcspn($cadena, "1234657890");
        echo "<br>";
        //------COMPARACIÓN DE CADENAS------------------
        $cadena="Hola Mundo";
        $cadena1="Hola Mundo";
        if ($cadena==$cadena1) {
            echo "Las cadenas son iguales";
        }else{
            echo "Las cadenas NO son iguales";
        }
        $num1=12;
        $num2=12.00;
        if ($num1==$num2) {
            echo "<br>Los numeros son iguales";
        }else{
            echo "<br>Los numeros NO son iguales";
        }
        if ($num1===$num2) {
            echo "<br>Los numeros son iguales y del mismo tipo";
        }else{
            echo "<br>Los numeros NO son iguales o del mismo tipo";
        }

        //--------------------------------------------------------

        //strcmp --> ORDENA POR CARACTERES ASCII

        echo "<br>";
        echo "strcmp(sevilla,betis)=";
        echo strcmp("sevilla", "betis");
        echo "<br>";
        echo "strcmp(betis, sevilla)=";
        echo strcmp("betis", "sevilla");
        echo "<br>";
        echo "strcmp(sevilla, sevilla)=";
        echo strcmp("sevilla", "sevilla");
        echo "<br>";
        echo "strcmp(sevilla, Sevilla)=";
        echo strcmp("sevilla", "Sevilla");
        //------------------------------------------

        echo "Ejemplos substr()<br>";
        $miCadena="Hola Mundo Otra vez";
        echo "Salida de substr($miCadena, 5, 4) donde \$miCadena=$miCadena: ";
        echo substr($miCadena, 5, 4);
        echo "<br><br>";
        echo "----------------------------";
        echo "<br> Salida de substr($miCadena, -6, 4)=";
        echo substr($miCadena, -6, 4);
        echo "<br><br>";
        echo "----------------------------";
        echo "<br> Salida de substr($miCadena, -8, -2)=";
        echo substr($miCadena, -8, -2);
        echo "<br><br>";
        echo "----------------------------";
        echo "<br> Salida de substr($miCadena, -8, 4)=";
        echo substr($miCadena, -8, 4);
        //Ejemplos de substr replace (cad1. cad2. inicio [, tamaño] );
        $cadena1="Hola Mundo";
        echo "<br>";
        echo "str_raplce(Hola, Adios, $cadena1)= ";
        echo str_replace("Hola", "Adios", $cadena1);
        echo PHP_EOL;
        //---------------------------------ejemplos htmlentities (cad1)
        $cadena="¿el camion es rojo?no niño";
        echo $cadena. "<br>".PHP_EOL;
        echo "<br>".PHP_EOL;
        echo htmlentities($cadena);
        echo "<br>";
        echo  "En html mostramos una imagen como <img src='url_img'>";
        echo "<br>";
        for ($i=0; $i <225 ; $i++) { 
            echo "Caracter ascci $i==".chr($i)."<br>";
        }

        //count_chars()

        $cadena="Hola Mundo";
        var_dump(count_chars($cadena))
    ?>
    </div>
    </body>
</html>