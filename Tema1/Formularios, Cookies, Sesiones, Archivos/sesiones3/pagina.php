<?php   
    session_start();
    if (!isset($_SESSION['usuario'])) {
        //Si no existe volvemos a index
        header('Location:index.php');
        die();
    }
?>
<!DOCTYPE html>
<?php
    if (isset($_COOKIE['contador'])) {
        setcookie('contador', $_COOKIE['contador']+1, time()+365*24*60*60);
        $mContador="Has visitado la página: ". $_COOKIE['contador']." veces.";
    }else{
        $mContador="Es tu primera visita";
        setcookie('contador',1,time()+365*24*60*60);
    }
    if (isset($_COOKIE['ultimaVez'])) {
        $mFecha="Visitaste la página por última vez: ".$_COOKIE['ultimaVez'];
        setcookie('ultimaVez',date('c'), time()+365*24*60*60);
    }else{
        $mFecha="No habías entrado nunca en esta página!!!";
        setcookie('ultimaVez', date('c'), time()+365*24*60*60);
    }
?>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
    </head>
    <body style="background-color:palegoldenrod">
        <div class="container mt-5">
            <?php
                echo "Bienvenido ".$_SESSION['usuario']."<br>";
                echo $mContador;
                echo "<br>";
                echo $mFecha;
            ?>
            <a href="borrarCookie.php" class="btn btn-success">Borrar</a>
        </div>            
    </body>
</html>