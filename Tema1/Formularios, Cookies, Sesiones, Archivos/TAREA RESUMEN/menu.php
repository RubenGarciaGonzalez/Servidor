<?php   
    session_start();
    if (!isset($_SESSION['usuarios'])) {
        //Si no existe volvemos a index
        header('Location:index.php');
        die();
    }
?>
<!DOCTYPE html>
<?php
   
?>
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
        $mil = time();
        $seconds = $mil / 1000;
        $fecha = date("d/m/Y H:i:s", $seconds);
        setcookie("ultima","",time()-1); 

        setcookie("ultima",$fecha,time()+ 60*60*24*365);

    ?>
        <div class="container mt-5">
            <?php
                echo "
                    <form name='menu'>
                    <table cellspacing='5' cellpadding='5' align='center' >
                        <tr class='text-center mb-5'>
                            <td colspan=2><h2>Datos de sesión</h2></td>
                        </tr>
                        <tr>
                            <td>
                                <p style='text-align:center'>Nombre de usuario</p>
                            </td>
                            <td>
                                <input type='text' name='nombre' value='". ucfirst($_SESSION['usuarios'])."' class='form-control' readonly>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p style='text-align:center'>Última conexión</p>
                            </td>
                            <td>
                            <input type='text' name='conexion' value='' class='form-control' readonly>
                            </td>
                        </tr>
                        <tr>
                            <td colspan='2' align='center'>
                                <a href='index.php' class='btn btn-info'>Cerrar sesión</a>
                            </td>
                        </tr>
                    </table>
                    </form>
                    ";
            ?>
        </div>            
    </body>
</html>