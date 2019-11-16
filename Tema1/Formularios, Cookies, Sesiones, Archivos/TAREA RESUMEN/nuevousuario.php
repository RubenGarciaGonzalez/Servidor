<?php
    //AL PRINCIPIO SIEMPRE
    //Le decimos que vamos a trabajar con sesiones.
    session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    </head>
    <link rel="stylesheet" href="css/style2.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:600i&display=swap" rel="stylesheet">
    <title>Creación de usuario</title>
</head>
<body style="background-color:#9be7ff">
    <?php
        if (isset($_POST['btnRegistro'])) {
            //Se ha pulsado el botón registrate, entonces...
            $archivo="usuarios.txt";
            $punt=fopen($archivo, "c");
            //Compruebo que el fichero exista para poder escribir en él
            if (!$punt=fopen($archivo,'r+')) {
                echo "Error el fichero no existe";
                die();
            }

            $nombre=$_POST['nombre'];
            $correo=$_POST['correo'];
            $contraseña=$_POST['contraseña'];
            $cifradoContraseña=hash('sha256', $contraseña);
            $flag=false;

            while (!feof($punt)) {
                $texto=explode('-->', fgets($punt));
                echo "<br>";
                if (count($texto)>2) {
                    if ($texto[0]==$nombre || $texto[1]==$correo) {
                        $flag=true;
                    }
                }
                
            }

            if ($flag!=true) {
                $punt=fopen($archivo, "a+");
                fwrite($punt, $nombre."-->".$correo."-->".hash('sha256',$contraseña)."\n");
                fclose($punt);
                
                echo "
                    <div class='container mt-3'>
                    <h1 class='text-center text-primary'> Se ha registrado correctamente!</h1>
                    <br>
                    <a href='index.php' class='btn btn-primary'>Volver</a>
                    </div>";
            }else{
                echo "
                    <div class='container mt-3'>
                    <h1 class='text-center text-danger'>Usuario/Correo ya registrados</h1>
                    <br>
                    <a href='index.php' class='btn btn-primary'>Volver</a>
                    </div>";
            }
            
        }else{
            //Pintamos el formulario
    ?>
    <form action="nuevousuario.php" style="border:1px solid #ccc" method="POST" >
    <div class="container">
        <h1>Registro</h1>
        <p>Rellana los siguientes campos para crear tu usuario.</p>
        <hr>

        <label for="nombre"><b>Nombre de usuario</b></label>
        <input type="text" placeholder="Introduzca su nombre de usuario" name="nombre" required>

        <label for="correo"><b>Correo electrónico</b></label>
        <input type="email" class="form-control" name="correo" placeholder="Introduce tu correo electronico"/>
        <br>
        <label for="contraseña"><b>Contraseña</b></label>
        <input type="password" placeholder="Introduzca su contraseña" name="contraseña" required>
        <div class="clearfix">
        <a href="index.php" >Cancel</button>
        <button type="submit" name="btnRegistro">Registrate</button>
        </div>
    </div>
    </form>
    <?php
        }
    ?>
</body>
</html>