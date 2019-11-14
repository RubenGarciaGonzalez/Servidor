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
        if (isset($_POST['btnEnviar'])) {
            //Se ha dado al botón login, entonces ...
            $nombre=$_POST['nombre'];
            $contraseña=$_POST['contraseña'];
            $cifradoContraseña=hash('sha256', $contraseña);
            setcookie("recordar", $_POST['nombre'], time()+60*60*24*365);
            $flag= false;
            
                $punt=fopen('usuarios.txt','r');
                while (!feof($punt)) {
                     $texto=explode('-->', fgets($punt));
                     if (count($texto)>2) {
                        if($texto[0] = $nombre && trim($texto[2]) == trim($cifradoContraseña)){
                            $flag = true;   
                        }
                    }   
                }

                if($flag == true){
                    $_SESSION['usuarios'] = $nombre;
                    header("Location:menu.php");
                    die();
                }else{
                    echo "<div class='container mt-4'>";
                    echo "<h2 class='text-danger text-center'> Error , contraseña o usuario incorrectos</h2>";
                    echo "<br>";
                    echo "<a href='index.php' class='btn btn-danger '>Volver</a>";
                    echo "</div>";
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
        <?php
           if(isset($_COOKIE['recordar'])){
           echo " <input type='text' value='".$_COOKIE['recordar']."' name='nombre' class='form-control' placeholder='Nombre'>";
           }else{
            echo " <input type='text'  name='nombre' class='form-control' placeholder='Nombre'>";
           }
        ?>

        <label for="contraseña"><b>Contraseña</b></label>
        <input type="password" placeholder="Introduzca su contraseña" name="contraseña" required>
        
        <div class="text-center ">
            <input type='submit' value='Login' class='btn btn-info' name='btnEnviar' />
            <input type='reset' value='Borrar' class='btn btn-secondary' />
            <a href="nuevousuario.php" class="btn btn-success">Crear nuevo usuario</a>
            <a href="borrarcookie.php" class="btn btn-warning">Borrar cookies</a>
        </div>
        <label>
        <input type="checkbox"  name="recordar"> Recordar nombre de usuario
        </label>
    </div>
    </form>
    <?php
        }
    ?> 
</body>
</html>