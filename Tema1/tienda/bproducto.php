<?php

    if (!isset($_POST['codigo'])) {
        header('Location:producto.php');
        die();
    }

    session_start();
    
    spl_autoload_register(function($nombre){
        require "./class/".$nombre.".php";
    });

    $codigo=$_POST['codigo'];
    $objeto= new Conexion();
    $llave=$objeto->getConector();
    $producto=new Fabricante($llave);
    $producto->setCodigo($codigo);
    $producto->delete();
    $llave=null;
    $_SESSION['mensaje']="El producto ha sido borrado correctamente";
    header('Location:producto.php');  