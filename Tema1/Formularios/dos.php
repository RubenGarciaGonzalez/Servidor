<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Formularios en PHP</title>
</head>
<body>
<div class="container mt-5">
        <?php 
            //Comprobamos si hemos dado en el boton submit
            if (isset ($_POST['btnEnviar'])) {
                //Procesamos el formulario
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
            }else{
                //Pintamos el formulario
                //!!!!!!! Este else cierra el final de cerrar el body
           

        ?>
</div>
    <div class="container mt-5">
        <form name='f1' action='dos.php' method='POST'> 
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Email" name='email'>
            </div>
            <div class="form-group col-md-6">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password" name='password'>
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>
        <div class="form-group">
            <label for="inputAddress2">Address 2</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">City</label>
                <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">Provincia</label>
                <select id="inputState" class="form-control" name='prov'>
                    <option selected>Almería</option>
                    <option>Granada</option>
                    <option>Cádiz</option>
                    <option>Sevilla</option>
                    <option>Málaga</option>
                    <option>Huelva</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="inputZip">Zip</label>
                <input type="text" class="form-control" id="inputZip">
            </div>
        </div>
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck" name='cbop1' value='opcion 1'>
                <label class="form-check-label" for="gridCheck">
                    Opción 1 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </label>
                <input class="form-check-input" type="checkbox" id="gridCheck" name='cbop2'>
                <label class="form-check-label" for="gridCheck">
                    Opción 2
                </label>
            </div>
        </div>
        <input type='submit' value='Enviar' class='btn btn-primary' name='btnEnviar'>
    </form>
    </div>
    <?php
            }
    ?>
   
</body>
</html>