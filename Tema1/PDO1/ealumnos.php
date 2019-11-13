<!DOCTYPE html>

<?php
if(!isset($_GET['id'])){
  header('Location:alumnos.php');
}
    session_start();

    //Hacemos autoload de las clases
    spl_autoload_register(
        function ($nombre) {
            require "./class/". $nombre .".php"; //Cuando llamo a una clase, automaticament ebusca el nombre de la clase .php
        }
    );

    
    $conexion = new Conexion();
    $miLlave = $conexion->getConector();
    $alumnos = new Alumnos($miLlave); //Le paso solo el CONECTOR
    $alumnos->setIdAl($_GET['id']);
    $datosAlumnos=$alumnos->getAlumno();
    //-------------------------------------------
    function error($texto){
        $_SESSION['error']=$texto;
       $id=$_GET['id'];
        header("Location:ealumnos.php?id=$id");
        die();
    }
    function editarAlumno($n,$a,$m){
        //die("$n, $a, $m");
        global $alumnos;
        global $datosAlumnos;
        $alumnos->setNomAl($n);
        $alumnos->setApeAl($a);
        $alumnos->setMail($m);
        //compruebo si he modificado o no el mail por el tema de no permitir
        //mails unicos
        if($m!=$datosAlumnos->mail){
            //Si ha cambiado el mail compruebo que no exista
            //el mail nuevo
            if($alumnos->existeMail()){
                error("El mail está duplicado, elije otro.");
            }
        }
        $alumnos->edit();
    $_SESSION['mensaje']="Alumno modificado con exito";
    header('Location:alumnos.php');
    }

    
?>

<html lang='en'>

<head>
    <title>Pagina</title>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'
        integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
</head>

<body style='background-color:salmon'>
    <div class='container mt-5'>
        <h3 class="text-center mt-4">Editar Alumnos</h3>
        <div class="container mt-3">
            <?php
        if (isset($_POST['enviar'])) {
            //Procesamos los datos
            $nombre=ucwords(trim($_POST['nombre']));
            $apellidos=ucwords(trim($_POST['apellidos']));
            $correo=(trim($_POST['email']));
            if (strlen($nombre)==0 || strlen($apellidos)==0) {
                error("Error. Los campos deben contener algún carácter!");
            }
            
            editarAlumno($nombre,$apellidos,$correo);

            
        }else{ 
    ?>
            <?php
            if (isset($_SESSION['error'])) {
                echo "<p class='mt-3 mb-3 text-danger'>";
                echo $_SESSION['error'];
                echo "</p>";
                unset($_SESSION['error']);
            }
        ?>
            <form name="as" action="<?php echo $_SERVER['PHP_SELF']."?id={$datosAlumnos->idAl}"; ?>" method="POST">
                <div class="form-group">
                    <label for="nom">Nombre</label>
                    <input type="text" class="form-control" id="nom" aria-describedby="emailHelp"
                        value='<?php echo $datosAlumnos->nomAl; ?>' placeholder="Tu Nombre" name="nombre" required>
                </div>
                <div class="form-group">
                    <label for="ape">Apellidos</label>
                    <input type="text" class="form-control" id="ape" placeholder="Tus Apellidos"
                        value='<?php echo $datosAlumnos->apeAl; ?>' name="apellidos" required>
                </div>
                <div class="form-group">
                    <label for="email">Correo</label>
                    <input type="email" class="form-control" id="email" placeholder="Correo electrónico"
                        value='<?php echo $datosAlumnos->mail; ?>' name="email" required>
                </div>
                <input type="submit" class="btn btn-primary" name="enviar" value="Modificar">&nbsp;

                <a href="alumnos.php" class="btn btn-info">Volver</a>
            </form>
        </div>
        <?php
        }
    ?>
</body>

</html>