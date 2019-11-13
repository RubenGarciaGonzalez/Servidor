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
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:600i&display=swap" rel="stylesheet">
    <title>Inicio de sesión</title>
</head>
<body style="background-color:#9be7ff">
    <?php
        if (isset($_POST['btnEnv'])) {
            //Se ha dado al botón login, entonces ...
            $nombre=$_POST['nombre'];
            $contraseña=$_POST['contraseña'];
            $cifradoContraseña=hash('sha256', $contraseña);
            $flag=false;


            $punt=fopen('usuarios.txt','r');
            while (!fopen($punt)) {
                $texto=explode('-->', fgets($punt));
                echo "<br>";
                    if ($texto[0]==$nombre && $texto[2]==$cifradoContraseña) {
                        $flag=true;
                    }   
            }

            if ($flag==true) {
                $nombre=$_SESSION['usuario'];
                header('Location:menu.php');
            }else{
                echo "
                    <h2 class='text-center text-danger'>Usuario y/o contraseña errónea</h2>
                    <br>
                    <a href='index.php' class='btn btn-warning'>Volver</a>";
            }
            
        }else{
            //Pintamos el formulario
    ?>

    
    <form action="index.php" method="post" name="form">
    <div class="container">
        <h2 class="text-center">Inicio de sesión</h2>
    </div>
    <div class="container mt-5">
        <label for="nombre"><b>Usuario</b></label>
        <input type="text" placeholder="Introduzca su nombre de usuario" name="nombre" required>

        <label for="contraseña"><b>Contraseña</b></label>
        <input type="password" placeholder="Introduzca su contraseña" name="contraseña" required>
        
        <div class="text-center ">
            <button type="submit" class="btn btn-success name="btnEnv">Login</button>
            <a href="nuevousuario.php" class="btn btn-success">Crear nuevo usuario</a>
        </div>
        <label>
        <input type="checkbox" checked="checked" name="recordar"> Recordar nombre de usuario
        </label>
    </div>
    </form>
    <?php
        }
    ?> 
</body>
</html>