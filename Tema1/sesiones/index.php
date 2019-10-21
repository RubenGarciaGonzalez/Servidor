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

<body>
    <div class='container mt-5'>
        <?php
            if(isset($_POST["btnLogin"])){
                //Procesar.
                
                $usuValido = "admin";
                $passValida = "admin1234";

                $nom = $_POST["nombre"];
                $pass = $_POST["password"];
                
                if($nom == $usuValido && $pass == $passValida){
                    //Me logeo correctamente.
                    $_SESSION["usuario"] = $nom; //Inicializo la variable de sesion que he llamado usuario.
                    header("Location: portal.php");

                }else{
                    //Me equivoco.
                    $_SESSION["error"] = "<p align='center'>El nombre de usuario o la contraseña son incorrectas.</p>";
                    header("Location: index.php");
                }


            }else{
                //Pintar.
            
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
                    <td colspan="2" align="center">
                        <input type="submit" value="Login" class="btn btn-info" name="btnLogin">&nbsp;&nbsp;
                        <input type="reset" value="Borrar" class="btn btn-warning" name="btnBorrar">
                    </td>
                </tr>
            </table>
        </form>
        <div class="container mt-5">
                <?php
                    if(isset($_SESSION["error"])){
                        echo $_SESSION["error"];
                        unset($_SESSION["error"]);
                    }
                ?>
        </div>
        <?php
            }
        ?>
    </div>
</body>

</html>