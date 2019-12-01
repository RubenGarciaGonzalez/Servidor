<!DOCTYPE html>
<html lang="es">
<?php

    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    session_start();

    spl_autoload_register(function($nombre){
        require "./class/".$nombre.".php";
    });

    
    function error($m){
        $_SESSION['error']=$m;
        header('Location:cproducto.php');
        die();
    }

    $conexion = new Conexion();
    $llave = $conexion -> getConector();
    $fabricante = new Fabricante($llave);
    $codigos =  $fabricante -> read();
   
    

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Crear Producto</title>
</head>

<body style="background-color:indigo;">
    <h3 class="text-center text-info mt-5">Crear Producto</h3>
    <div class="container mt-3">
        <?php
            if (isset($_POST['btnEnv'])) {
                //Procesamos
                $nombre = trim($_POST['nombre']);
                $opcion = $_POST['fab'];
                $precio = trim($_POST['precio']);

                if (strlen($nombre)==0 || strlen($precio) == 0) {
                    error("Error!! No ha introducido algún valor obligatorio ");
                }

                $producto = new Producto($llave);
                $producto -> setNombre($nombre);
                $producto -> setPrecio($precio);
                $producto -> setCodigoFabricante($opcion);

                $producto -> create();

                $_SESSION['mensaje']="Producto creado correctamente!!";
                header('Location:producto.php');

            }else{
                //Mostramos el error
                if (isset($_SESSION['error'])) {
                    echo "<p class='text-center text-warning'>{$_SESSION['error']}</p>";
                    unset($_SESSION['error']);
                }
        ?>
        <form name="a" action="cproducto.php" method="POST">
            <div class="row">
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Nombre del Fabricante:</label>
                    <select  class="form-control" name="fab" id="opcion">
                        <option value="">...</option>
                        <?php
                            foreach ($codigos as $item) {
                                echo "<option value='{$item->codigo}'>{$item->nombre}</option>".PHP_EOL;
                            }
                        ?>
                    </select>
                </div>
                <div class="col">
                    <label for="name">Nombre del producto:</label>
                    <input type="text" class="form-control" placeholder="Introduzca el nombre del producto"
                        name="nombre" required>
                </div>
                <div class="form-group">
                    <label for="name">Precio del producto:</label>
                    <input type="number" min="1" class="form-control" placeholder="Precio del producto"
                        name="precio" required>
                </div>
            </div>
            <div class="mt-3 text-center">
                <input type="submit" value="Crear" name="btnEnv" class="btn btn-info">&nbsp;
                <input type="reset" value="Limpiar" class="btn btn-warning">&nbsp;
                <a href="producto.php" class="btn btn-success">Volver</a>
            </div>
        </form>
    </div>
    <?php
        }
    ?>
</body>

</html>