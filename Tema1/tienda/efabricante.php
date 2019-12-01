<!DOCTYPE html>
<html lang="es">
<?php

    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    if (!isset($_GET['codigo'])) {
        header('Location:fabricante.php');
        die();
    }

    $codigo = $_GET['codigo'];

    session_start();

    spl_autoload_register(function($nombre){
        require "./class/".$nombre.".php";
    });

    function error($m){
        global $codigo;
        $_SESSION['error']=$m;
        header("Location:efabricante.php?$codigo");
        die();
    }

    $conexion = new Conexion();
    $llave = $conexion -> getConector();
    $fabricante = new Fabricante($llave);
    $esteFabricante = $fabricante -> getCodigo($codigo);

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Editar Fabricante</title>
</head>

<body style="background-color:indigo;">
    <h3 class="text-center text-info mt-5">Editar Coche</h3>
    <div class="container mt-3">
        <?php
            if (isset($_POST['btnEnv'])) {
                //Procesamos
                $nombre = trim($_POST['nombre']);

                if (strlen($nombre)==0) {
                    error("Error!! No ha introducido ningún nombre ");
                }
                $fabricante -> setCodigo($codigo);
                $fabricante->setNombre($nombre);
                $fabricante -> update();

                $_SESSION['mensaje']="Fabricante modificado con exito!!";
                $llave=null;
                header('Location:fabricante.php');

            }else{
                //Mostramos el error
                if (isset($_SESSION['error'])) {
                    echo "<p class='text-center text-warning'>{$_SESSION['error']}</p>";
                    unset($_SESSION['error']);
                }
        ?>
        <form name="a" action="efabricante.php?codigo=<?php echo $codigo;?>" method="POST">
            <div class="row">
                <div class="col">
                    <label for="name">Nombre de fabricante:</label>
                    <input type="text" class="form-control" value='<?php echo $esteFabricante->nombre; ?>' name="nombre"
                        required>
                </div>
            </div>
            <div class="mt-3 text-center">
                <input type="submit" value="Editar" name="btnEnv" class="btn btn-info">&nbsp;
                <a href="fabricante.php" class="btn btn-success">Volver</a>
            </div>
        </form>
    </div>
    <?php
        }
    ?>
</body>

</html>