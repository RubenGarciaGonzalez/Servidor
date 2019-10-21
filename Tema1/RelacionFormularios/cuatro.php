<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    </head>
    <title>Relación de formularios en PHP nº1</title>
</head>
<body style="background-color:#5d99c6"> 
    <div class="container, mt-4">
        <h3 class="text-center">Ejercicio 4</h3>
        <h3 class="text-center">Correo y menú</h3>
        <br>
        <?php
         /*
            Escriba un formulario de recogida de datos personales que conste de dos páginas.
                •En la primera página se solicitan la dirección de correo electrónico y si se está interesado en recibir correos.
                •En la segunda página se muestran la respuesta del usuario o se informa de los errores cometidos.
                
            Notas:
                •Para validar la primera dirección de correo electrónico, se puede utilizar la función filter_var()
                •Cuando procesemos el formulario se mostrará un aviso si la segunda dirección de correo no coincide con la primera.
                •Se mostrará un aviso si no se indica si se quiere o no recibir correos.
         */

        if (isset($_POST['btnEnv'])) {
            //Hemos pulsado enviar
            if ($_POST['correo'] == "") {
                echo "<p class='text-danger'>ERROR! No ha introducido su correo.</p><br>";
            }elseif (!filter_var($_POST['correo'],FILTER_VALIDATE_EMAIL)) {
                echo "<p class='text-danger'>ERROR! El correo introducido no es válido.</p><br>";                
            }else{
                echo "El correo introducido es ".$_POST['correo']."<br>";
            }

            if ($_POST['correo1'] == "") {
                echo "<p class='text-danger'>ERROR! No ha introducido la confirmación de correo.</p><br>";
            }elseif ($_POST['correo']!=$_POST['correo1']) {
                echo "<p class='text-danger'>ERROR! Los correos no coinciden.</p><br>";                
            }else{
                echo "La confirmación del correo introducido es ".$_POST['correo1']."<br>";
            }

            if ($_POST['recibir']=="0") {
                echo "<p class='text-danger'>ERROR! Debe seleccionar una opción.</p><br>";        
            }elseif ($_POST['recibir']=="1") {
                echo "Usted ha decidido recibir correos nuestros<br>";                
            }elseif ($_POST['recibir']=="2"){
                echo "Usted ha decidido no recibir correos nuestros<br>";                
            }
        }else{
        ?>
        <form action="cuatro.php" method="post">
        <b>Indique su dirección de correo: <input type="email" name="correo" size="40"></b><br>
        <b>Confirme su dirección de correo: <input type="email" name="correo1" size="40"></b>
        <br>
        <b>Indique si quiere recibir correos nuestros:</b> 
        <select name="recibir">
            <option value="0">...</option>
            <option value="1">Sí</option>
            <option value="2">No</option>
        </select>
        <br>
        <input type="submit" value="Enviar" name="btnEnv">
        <input type="reset" value="Borrar">
        </form>
    </div>
    <?php
        }
    ?>
    </body>
</html>