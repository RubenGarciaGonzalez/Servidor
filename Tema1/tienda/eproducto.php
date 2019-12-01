<!DOCTYPE html>
<html lang="es">
<?php

    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    if (!isset($_GET['codigo_fabricante'])) {
        header('Location:producto.php');
        die();
    }

    $codigo = $_GET['codigo_fabricante'];

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
    $producto = new Producto($llave);
    $esteProducto = $producto -> getCodigoFabricante($codigo);

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
                $precio = trim($_POST['precio']);

                if (strlen($nombre)==0 || strlen($precio)==0) {
                    error("Error!! No ha introducido alguno de los valores obligatorios ");
                }
                $producto -> setCodigoFabricante($codigo);
                $producto->setNombre($nombre);
                $producto->setPrecio($precio);

                $producto->update();

                $_SESSION['mensaje']="Producto modificado con exito!!";
                $llave=null;
                header('Location:producto.php');

            }else{
                //Mostramos el error
                if (isset($_SESSION['error'])) {
                    echo "<p class='text-center text-warning'>{$_SESSION['error']}</p>";
                    unset($_SESSION['error']);
                }
        ?>
        <form name="a" action="eproducto.php?codigo_fabricante=<?php echo $codigo;?>" method="POST">
            <div class="row">
                <div class="col">
                    <label for="name">Código de fabricante:</label>
                    <input type="text" class="form-control" value='<?php echo $esteProducto->codigo_fabricante; ?>' name="codigo"
                        readonly>
                </div>
                <div class="col">
                    <label for="name">Nombre de producto:</label>
                    <input type="text" class="form-control" value='<?php echo $esteProducto->nombre; ?>' name="nombre"
                        required>
                </div>
                <div class="col">
                    <label for="name">Nombre de producto:</label>
                    <input type="number" min="1" class="form-control" value='<?php echo $esteProducto->precio; ?>' name="precio"
                        required>
                </div>
            </div>
            <div class="mt-3 text-center">
                <input type="submit" value="Editar" name="btnEnv" class="btn btn-info">&nbsp;
                <a href="producto.php" class="btn btn-success">Volver</a>
            </div>
        </form>
    </div>
    <?php
        }
    ?>
</body>

</html>