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
            echo "<hr>";
            //Explode e implode
            //Convierten string a array o array a string
            //Explode => String a array
            $cad="El cielo esta enladrillado";
            echo "$cad<br>";
            $array=explode(" ",$cad);
            print_r($array);
            echo "<br>";
            $cad="felipe::perez::felipe@correo.es::http://felipe.es";
            $array=explode("::",$cad);
            print_r($array);
            echo "<br>";
            list($nom,$apellidos,$mail,$url)=explode("::",$cad);
            echo "Nombre=$nom || Apellidos=$apellidos || Mail=$mail || Url=$url"."<br>";
            //Implode => Array a string
            $array=["portero","delantero","centrales","defensas","suplentes"];
            $string=implode(" || ",$array);
            echo "$string<br>";
            //Añadir o quitar elementos de un array
            //Al final del mismo--------------------------
            $array=["portero","delanteros","suplentes"];
            array_push($array,"Entrenadores");//Añade entrenadores al final
            print_r($array);
            echo "<br>";
            array_pop($array);
            print_r($array);
            echo "<br>";
            //Al principio--------------------------------
            array_unshift($array,"Entrenadores");
            print_r($array);
            echo "<br>";
            array_shift($array);
            print_r($array);
            echo "<br>";
            echo "<hr>";
            //Juntar dos arrays array_merge--------------------
            //Cuando son arrays indexados
            $array1=array(1,"dos",3,4,"cinco",9);
            $array2=array(1,"hola",3,"adios",5,6);
            $union=array_merge($array1,$array2);
            print_r($array1);
            echo "<br>";
            print_r($array2);
            echo "<br>";
            print_r($union);
            echo "<br>";
            //Cuando son arrays asociativos
            $mat1=[
                "uno"=>"'valor 1 array 1'",
                "dos"=>"'valor 2 array 1'"
            ];

            $mat2=[
                "key1"=>"'valor 1 array 2'",
                "key2"=>"'valor 2 array 2'",
                "key3"=>"'valor 3 array 2'"
            ];

            $res=array_merge($mat1,$mat2);
            print_r($res);
            echo "<br>";

            // NO SE PUEDE TENER DOS CLAVES IGUALES PORQUE EL SEGUNDO MACHACA AL PRIMERO
            $mat1=[
                1=>"'valor1 es mat1'",
                "dos",
                5=>"'valor 5'"
            ];
            $mat2=[
                1=>"'valor de array2'",
                "'Valor 2 array 2'",
                5=>"'valor 5 array 2'"
            ];

            echo "<br>Mat1<br>";
            print_r($mat1);
            echo "<br>Mat2<br>";
            print_r($mat2);
            $union=array_merge($mat1,$mat2);
            echo "<br>La union<br>";
            print_r($union);







        ?>
    </div>
    </body>
</html>