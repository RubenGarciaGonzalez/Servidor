<?php

    if (!isset($_POST['codigo'])) {
        header('Location:fabricante.php');
        die();
    }

    session_start();
    
    spl_autoload_register(function($nombre){
        require "./class/".$nombre.".php";
    });

    $codigo=$_POST['codigo'];
    $objeto= new Conexion();
    $llave=$objeto->getConector();
    $fabricante=new Fabricante($llave);
    $fabricante->setCodigo($codigo);
    $fabricante->delete();
    $llave=null;
    $_SESSION['mensaje']="El fabricante ha sido borrado correctamente";
    header('Location:fabricante.php');  