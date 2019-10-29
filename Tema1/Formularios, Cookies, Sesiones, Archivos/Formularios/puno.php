<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"></head>
<body>
    <div class="container mt-5">
        <h3 class='text-center'>Procesando el Formulario</h3>
        <?php
            //Recogemos los datos del formulario.
            $mail=$_REQUEST['email']; //<--  El nombre que tenga el input
            $pass=$_POST['password']; //<--  El nombre que tenga el input
            $prov=$_POST['prov'];
            if (isset($_POST['cbop1'])) {
                echo "<b>Opción 1 ha sido marcado</b><br>";
            }
            if (isset($_POST['cbop2'])) {
                echo "<b>Opción 2 ha sido marcado</b>";
            }
            
            


            echo "<br>El correo es : <b>$mail</b>";
            echo "<br>La contraseña es : <b>$pass</b>";
            echo "<br>La provincia es : <b>$prov</b>";



        ?>
    
    </div>
</body>
</html>