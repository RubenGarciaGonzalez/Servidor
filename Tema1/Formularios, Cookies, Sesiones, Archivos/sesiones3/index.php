<?php
    //AL PRINCIPIO SIEMPRE
    //Le decimos que vamos a trabajar con sesiones.
    session_start();
?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <title>Pagina</title>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
</head>
<body style="background-color:aqua">
    <div class='container mt-5'>
        <?php
            if (isset($_POST['btnLogin'])) {
                //Se ha pulsado el botón enviar, entonces:

                $usuarios=[
                    "admin"=>"pass",
                    "juan"=>"passjuan",
                    "pedro"=>"passpedro"
                ];

                $nomUsu = trim($_POST["nombre"]);
                $passUsu = trim($_POST["password"]);
                if(array_key_exists($nomUsu,$usuarios) && $usuarios[$nomUsu]==$passUsu){
                    if ($_POST['ckUsuario']) {
                        if (isset($_COOKIE['ckUsuario'])) {
                            setcookie('ckUsuario', "$nomUsu", time()+7*24*60*60);
                            $mUsuario=$_COOKIE['ckUsuario'];
                        }
                        if (isset($_COOKIE['ckPass'])) {
                            setcookie('ckPass', "$passUsu", time()+7*24*60*60);
                            $mPass=$_COOKIE['ckPass'];
                        }
                    }
                    $_SESSION['usuario']=$nomUsu;
                    header('Location:pagina.php');
                }else{
                    echo "El usuario NO existe";
                }

                

            }else{           
                //Pintamos el formulario
        ?>
        <form name="login" action="index.php" method="POST">
            <table cellspacing="5" cellpadding="5" align="center" >
                <tr class="text-center mb-5 ">
                    <td colspan=2 bgcolor="silver">Login</td>
                </tr>
                <tr>
                    <td>
                        <p>Nombre</p>
                    </td>
                    <td>
                        <input type="text" name="nombre" placeholder="Nombre" class="form-control" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Password</p>
                    </td>
                    <td>
                        <input type="password" name="password" placeholder="Contraseña" class="form-control" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <b>Recordar Usuario&nbsp;</b>
                        <input type="checkbox" name="ckUsuario" class="form-control">
                    </td>
                    <td>
                        <b>Recordar Password&nbsp;</b>
                        <input type="checkbox" name="ckPass" class="form-control">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="Login" class="btn btn-info" name="btnLogin">&nbsp;&nbsp;
                        <input type="reset" value="Borrar" class="btn btn-warning" name="btnBorrar"/>&nbsp;
                        <input type="submit" value="Borrar Cookies" name="borrarCookie" class="btn btn-success"/>
                    </td>
                </tr>
            </table>
        </form>
        </div>
    </div>
    <?php
        }
    ?>
</body>

</html>