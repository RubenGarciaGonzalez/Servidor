<?php
    //AL PRINCIPIO SIEMPRE
    //Le decimos que vamos a trabajar con sesiones.
    session_start();

?>

<!DOCTYPE html>
<html lang='en'>

<head>
    <title>Login</title>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
</head>

<body style="background-color:#c7a4ff">
    <div class='container mt-5'>
        <?php
            if(isset($_POST["btnLogin"])){
                //Procesar.
                $nom = $_POST["nombre"];
                $tipo = $_POST["tipo"];
                
                if($_POST['tipo']=="null"){
                    echo "<h4 class='text-center text-danger'>ERROR! Debe escoger un tipo de usuario</h4>";
                    echo "<a href='index.php' class='btn btn-danger'>Volver</a>";
                }else{
                    $_SESSION["usuario"] = $nom;
                    $_SESSION["tipo"]=$tipo; //Inicializo la variable de sesion que he llamado usuario.
                    header("Location: menu.php");
                }

                if ($_POST['recordarNombre']){
                    if (!isset($_COOKIE["nombre"])) {
                        setCookie("nombre", $_POST["nombre"], time() + 24 * 60 * 60);
                    } 
                }

            }else{
                //Pintar.
            
        ?>
        <form name="login" action="index.php" method="POST">
            <table cellspacing="5" cellpadding="5" align="center" style="border-color:#666666; border-style:dashed; border-width:2px;" >
                <tr class="text-center mb-5 ">
                    <td colspan=2 bgcolor="#4ebaaa">Login</td>
                </tr>
                <tr>
                    <td>
                        <p>Nombre</p>
                    </td>
                    <td>
                        <input type="text" name="nombre" value="<?php if (isset($_COOKIE['nombre'])) echo $_COOKIE['nombre']; if (isset($_POST['btnCookies'])) echo "";?>" placeholder="Nombre" class="form-control" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Tipo de usuario</p>
                    </td>
                    <td>
                        <select name="tipo">
                            <option value="null">...</option>
                            <option value="Admin">Admin</option>
                            <option value="Normal">Normal</option>
                            <option value="Avanzado">Avanzado</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                    Recordar Nombre&nbsp; <input type="checkbox" value="Recordar Nombre" name="recordarNombre">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <input type="submit" value="Login" class="btn btn-info" name="btnLogin">&nbsp;&nbsp;
                        <input type="reset" value="Borrar" class="btn btn-warning" name="btnBorrar">&nbsp;&nbsp;
                        <input type="reset" value="Borrar Cookies" class="btn btn-secondary" name="btnCookies"/>
                        <?php
                            if (isset($_POST['btnCookies'])) {
                                if (isset($_COOKIE['nombre'])) {
                                    setcookie("nombre","",-1);
                                }
                                unset($_POST['btnCookies']);
                                header('Location:index.php');
                            }
                        ?>
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