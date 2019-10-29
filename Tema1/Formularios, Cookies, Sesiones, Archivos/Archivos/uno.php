<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    </head>
    <title>Archivos</title>
</head>
<body style="background-color:navajowhite"> 
    <div class="container, mt-5">
        <?php
            if (!$punt=fopen('uno.txt','r')) {
                echo "Error el fichero no existe";
                die();
            }
            while (!feof($punt)) {
                echo fgets($punt) . "<br>";
            }
            fclose($punt);
            $punt=fopen('dos.txt', 'x'); //Modo escritura seguro
            $usuarios=[
                'usu1'=>'pass1',
                'usu2'=>'pass2',
                'usu3'=>'pass3',
                'usu4'=>'pass4'
            ];
            foreach ($usuarios as $k => $v) {
                fwrite($punt, $k . '::'. $v. "\n");
            }
            fclose($punt);
            //---------------------------------------------------------
            //Metemos un usuario más
            $punt=fopen('dos.txt', 'a+');
            fwrite($punt, "usu5::pass5\n");
            fclose($punt);
            //---------------------------------------------------------
            //Leemos lo anterior
            $texto=file_get_contents('dos.txt');
            echo "<br>$texto";
            $pass="paco";
            //echo hash('sha256', $pass);
            //---------------------------------------------------------
            $punt=fopen("usuarios.txt", 'w');
            fwrite($punt, "usuario1 --> ".hash('sha256','pass1'). "\n");
            fwrite($punt, "usuario2 --> ".hash('sha256','pass2'));
            fclose($punt);
            //---------------------------------------------------------
            $punt=fopen("usuarios.txt",'r');
            $usu="usu1";
            $pass="pass1";
            echo "<br>";
            echo "<b>LECTURA DE USUARIOS</b><br>";
            while (!feof($punt)) {
                $linea=explode('::', fgets($punt));
                echo "<br>";
                print_r($linea);
                echo "<br>";
                //------------------------------------
                echo "<br>". $linea[0]. "::". $linea[1];
            }
        ?>
    </div>
    </body>
</html>