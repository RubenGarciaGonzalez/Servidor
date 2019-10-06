<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    </head>
    <title>Ejemplos de Vectores</title>
</head>
<body>
    <div class="container, mt-4">
        <p class='text-center'>Arrays en PHP</p>
        <?php
            //podemos utilizarlos como en java
            //Notacion Antigua
            $vector=array("uno","dos","tres");
            //Notacion nueva
            $vector1=[
                "Barcelona",
                "Madrid",
                "Almería",
                "Pamplona"
            ];

            //Podemos recorrerlos como en java
            //count me da los elementos de un array
            for ($i=0; $i < count($vector) ; $i++) { 
                echo "\$vector[$i]=".$vector[$i]."<br>";
            }

            echo "El número de elementos de vector1 es ".count($vector1);
            echo "<br>\$vector1[2]=".$vector1[2];
            echo "<br>";
            //Más de una dimension
            $capitales=[
                ["Madrid","Barcelona","Sevilla","Tarragona", "Soria"],
                ["Badajoz","Caceres","Almeria","Valencia"],
                ["Granada","Cadiz","Jaen","Murcia"]
            ];
            echo "La dimension de \$capitales=".count($capitales);
            echo "<br>";
            //Mostramos $capitales

            for ($f=0; $f < count($capitales) ; $f++) { 
                echo "<br>";
                for ($c=0; $c <count($capitales[$f]) ; $c++) { 
                    echo "Capitales[$f][$c]: ".$capitales[$f][$c]. " ";
                }
            }
            //A partir de aqui empieza la fiesta//PASATE LA FARLOPA
            $vector=[
                "uno",
                "dos"
            ];
            $vector[]="hola";
            $vector[23]="Adios";
            $vector[]="Saludo";
            echo "<br>";
            echo "El número de elementos del vector será...".count($vector);
            echo "<br>";
            //ESTO NO FUNCIONA NI DE COÑA
            for ($i=0; $i < count($vector) ; $i++) { 
                echo "\$vector[$i]=".$vector[$i]."<br>";
            }
            //---------------------------------------------
            echo "<br>Resultado de var_dump<br>";
            var_dump($vector);
            echo "<br>Resultado de print_r<br>";
            print_r($vector);
            $vector[3]="Nuevo Valor";
            echo "<br>Resultado de var_dump<br>";
            var_dump($vector);
            echo "<br>Resultado de print_r<br>";
            print_r($vector);
            $vector[]="Otro más";
            echo "<br>Resultado de print_r<br>";
            print_r($vector);
            echo "<br>";
            //-----------------------------------------------
            //Algunos métodos utiles
            //current, key, reset, next, prev, end;
            echo "<br>#---Valores del vector al principio- ---<br>";
            echo "current(\$vector)=".current($vector)."<br>";
            echo "key(\$vector)=".key($vector)."<br>";
            next($vector);           
            echo "<br>#---Valores del vector dps del next----<br>";
            echo "current(\$vector)=".current($vector)."<br>";
            echo "key(\$vector)=".key($vector)."<br>";
            next($vector);           
            echo "<br>#---Valores del vector dps del next----<br>";
            echo "current(\$vector)=".current($vector)."<br>";
            echo "key(\$vector)=".key($vector)."<br>"; 
            reset($vector);
            echo "<br>#---Valores del vector dps del reset----<br>";
            echo "current(\$vector)=".current($vector)."<br>";
            echo "key(\$vector)=".key($vector)."<br>"; 
            //---------------------------
            reset($vector);
            do{
                echo "\$vector[".key($vector)."]=".current($vector)."<br>";
                echo "<br>";
            }while(next($vector));
            reset($vector);
            /*
                $vector[0]=uno

                $vector[1]=dos

                $vector[2]=hola

                $vector[23]=Adios

                $vector[24]=Saludo

                $vector[3]=Nuevo Valor

                $vector[25]=Otro más
            */
            //--------------------------------------
            do{
                $i=key($vector);
                echo "\$vector[$i]=".$vector[$i];
                echo "<br>";
            }while(next($vector));
            reset($vector);
            echo "<br>";
            //recorremos el vector al reves ----------
            end($vector); //Nos posicionamos al final del array
            do{
                $i=key($vector);
                echo "\$vector[$i]=".$vector[$i];
                echo "<br>";
            }while(prev($vector));
            echo "<br>";
            //--------------------------------------------------
            //Arrays asociativos clave => valor
            $misCapitales=[
                "Extremadura"=>"dos",
                "Andalucia"=>"Siete",
                "Valencia"=>"tres",
                "Aragon"=>"No me acuerdo, o quizás si"
            ];

            print_r($misCapitales);
            echo "<br>";
            echo $misCapitales["Andalucia"];
            echo "<br>";
            echo $misCapitales["Aragon"];
            $misCapitales[]="Esta no tiene ni nombre";
            echo "<br>";
            print_r($misCapitales);
            echo "<br>";
            echo $misCapitales[0];
            echo "<br>";
            $misCapitales[]="Ni esta";
            echo "<br>";
            print_r($misCapitales);
            $misCapitales[23]="Esta es la 23";
            $misCapitales[]="Cual ser esta";
            echo "<br>";
            print_r($misCapitales);
            $misCapitales["Madrid"]="Solo Una";
            echo "<br>";
            print_r($misCapitales);
            echo "<br>";
            do{
                $i=key($misCapitales);
                echo "\$vector[$i]=".$misCapitales[$i];
                echo "<br>";
            }while(next($misCapitales));

            //--------------------------------------------
            //FUNCION PARA RECORRER ARRAY( EL + COMÚN)
            $array1=[
                "Clave 1"=>"Valor de la clave 1",
                "Clave 2"=>"Valor de la clave 2",
                "Clave 3"=>"Valor de la clave 3",
                "Clave 4"=>"Valor de la clave 4",
                "Clave 5"=>"Valor de la clave 5", 
            ];

            echo "<br>---------------------<br>";
            foreach ($array1 as $k => $v) {
                echo "\$array1[$k]=".$v."<br>";
            }           
            //--------------------------------------------
            echo "<br>---------------------<br>";
            $comunidades=[
                "Andalucia"=>["Almería","Cadiz","Cordoba","Granada","Huelva"."Jaen","Malaga","Sevilla"],
                "Extremadura"=>["Badajoz","Caceres"],
                "Aragon"=>["Zaragoza","Huesca","Teruel"],
                "Murcia"=>"Murcia"
            ];

            foreach ($comunidades as $k => $v) {
                echo "Comunidad: <b>".$k."</b> Sus provincias son:<br>";
                foreach ($v as $k1 => $v1) {
                    echo "$k1.- $v1<br>";
                }
                echo "<br>";
            }
             
            foreach($comunidades as $key => $valor){
                $num = count($valor);
                echo "<table border=1px>";
                echo "<tr align=center>";
                echo "<td colspan=$num>$key</td>";
                echo "</tr>";
                echo "<tr>";
                foreach($valor as $key2 => $valor2){
                    echo "<td> $valor2 </td>";
                }
                echo "</tr>";
                echo "</table><br><br>";
            }

            //---------------------------List
            $vector=["valor1","valor2"];
            list($var1,$var2)=$vector;
            echo $var1."<br>";
            echo $var2."<br>";
            //El list se suele utilizar por each()
            $vector1=[
                "Soy el primero valor",
                "Soy una clave"=>"Soy el valor de la clave"
            ];
            list($a,$b)=each($vector1);
            //--------------------------------------
            echo "<br>";
            var_dump($a);
            echo "<br>";
            var_dump($b);
            ///----------------------------------
            echo "<br>------------";
            list($a,$b)=$vector1;
            var_dump($a);
            echo "<br>";
            var_dump($b);
            //--------------------------------------
            echo "<br>";
            list($a,$b)=each($vector1);
            var_dump($a);
            echo "<br>";
            var_dump($b);

            $vector=["valor1","valor2","valor3"];
            list($uno,$dos,$tres)=$vector;
            echo "<br>";
            echo "$uno,$dos,$tres";
            $prubea=[
                "kuno"=>"vuno",
                "kdos"=>"vdos"
            ];

            list($a,$b)=each($prubea);
            echo "<br>$a, $b";
            list($a,$b)=each($prubea);
            echo "<br>$a, $b";

        ?>
    </div>
</body>
</html>