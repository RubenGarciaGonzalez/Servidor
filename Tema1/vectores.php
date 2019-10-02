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

        ?>
    </div>
</body>
</html>