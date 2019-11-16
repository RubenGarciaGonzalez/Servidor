<?php   
    session_start();
    if (!isset($_SESSION['usuarios'])) {
        //Si no existe volvemos a index
        header('Location:index.php');
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:600i&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
    </head>
    <body style="background-color:salmon">
    <?php
        $sesion=$_SESSION['usuarios'];
        if(!isset($_COOKIE[$sesion])){
            setcookie($sesion,date(DATE_RFC2822),time()+ 60*60*24*365);  
            $flag =false;
        }else{
            $flag = true;
        }

    ?>
        <div class="container mt-5">
            <?php
                echo   "<form name='menu'>";
                echo    "<table cellspacing='5' cellpadding='5' align='center' >";
                echo        "<tr class='text-center mb-5'>";
                echo            "<td colspan=2><h2>Datos de sesión</h2></td>";
                echo         "</tr>";
                echo       "<tr>";
                echo        "<td>";
                echo            "<p style='text-align:center'>Nombre de usuario</p>";
                echo        "</td>";
                echo        "<td>";
                echo            "<input type='text' name='nombre' value='". ucfirst($sesion)."' class='form-control' readonly>";
                echo         "</td>";
                echo        "</tr>";
                echo         "<tr>";
                echo             "<td>";
                echo                 "<p style='text-align:center'>Última conexión</p>";
                echo             "</td>";
                echo         "<td>";
                            if($flag==false){
                                echo "<input type='text' name='conexion' value='Primera visita!!' class='form-control' readonly>";
                            }else{
                                echo "<input type='text' name='conexion' value='".$_COOKIE[$sesion]."' class='form-control' readonly>";
                            }
                echo         "</td>";
                echo        "</tr>";
                echo        "<tr>";
                echo            "<td colspan='2' align='center'>";
                echo                "<a href='cerrar.php' class='btn btn-danger ml-1'>Cerrar sesión  </a>";
                echo            "</td>";
                echo        "</tr>";
                echo    "</table>";
                echo    "</form>";
            ?>
        </div>            
    </body>
</html>