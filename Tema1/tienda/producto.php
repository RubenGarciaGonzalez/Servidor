<!DOCTYPE html>
<html lang="es">
<?php

    session_start();

    spl_autoload_register(function($nombre){
        require "./class/".$nombre.".php";
    });

    $conexion = new Conexion();
    $llave = $conexion->getConector();
    $producto = new Producto($llave);
    $todos = $producto->read();
    $llave=null;
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Fabricantes</title>
    <style>
        h2{
            font-family:'PT Serif', serif;
        }
    </style>
</head>

<body style="background-color:indigo">
    <div class="container mt-5">
        <div class="float-right">
            <a href="fabricante.php" class="btn btn-info">Fabricantes</a>
        </div>
        <h2 class="text-center text-primary mt-3 mb-1">PRODUCTOS</h2>
        <?php
            if (isset($_SESSION['mensaje'])) {
                echo "<p class='text-center text-success mb-3'>{$_SESSION['mensaje']}</p>";
                unset($_SESSION['mensaje']);
            }
        
        ?>
        <a href="cproducto.php" class="mt-3 mb-3 btn btn-success">Nuevo Producto</a>
        <table class="table table-striped table-dark">
            <thead>
                <tr style="text-align:center; font-weight:bold;">
                    <th scope="col">Codigo</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                    <?php
                        foreach ($todos as $item) {
                            echo "<tr style='text-align:center'>".PHP_EOL;
                            echo "<th scope='row'>{$item->codigo_fabricante}</th>".PHP_EOL;
                            echo "<td>{$item->nombre}</td>".PHP_EOL;
                            echo "<td>{$item->precio}</td>".PHP_EOL;
                            echo "<td>".PHP_EOL;
                            echo "<form name='a' action='bproducto.php' method='POST' style='display:inline'>".PHP_EOL;
                                echo "<input type='hidden' value='{$item->codigo_fabricante}' name='codigo'>".PHP_EOL; 
                                echo "<a href='eproducto.php?codigo_fabricante={$item->codigo_fabricante}' class='btn btn-info'>Editar</a>".PHP_EOL;
                                echo "<input type='submit' class='btn btn-danger' value='Borrar'>".PHP_EOL;
                            echo "</form>".PHP_EOL;
                            echo "</td>".PHP_EOL;
                            echo "</tr>".PHP_EOL;
                        }
                    ?>
            </tbody>
        </table>

    </div>
</body>

</html>