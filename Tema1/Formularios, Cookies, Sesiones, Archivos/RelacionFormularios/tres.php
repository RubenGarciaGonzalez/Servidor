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
        <h3 class="text-center">Ejercicio 3</h3>
        <h3 class="text-center">Botón radio y casillas de verificación</h3>
        <br>
        <?php
         /*
            Escriba un formulario de recogida de datos personales que conste de dos páginas.
                •En la primera página se solicitan el sexo y las aficiones.
                •En la segunda página se muestran el sexo y las aficiones indicados por el usuario o se informa de los errores cometidos.
                Notas:
                •Cuando se procese el formulario se mostrará un aviso si no se selecciona uno de los sexos.
                •Se mostrará un aviso si en los controles se reciben valores no vacíos distintos de los que establece el formulario.
                •Si no se indica ninguna afición, el programa debe indicarlo.
         */

         if (isset($_POST['btnEnv'])) {
            if (isset($_POST['sexo'])) {
                if ($_POST['sexo']=="") {
                    echo "<p class='text-danger'>ERROR! Debe seleccionar una opción.</p><br>";        
                }elseif ($_POST['sexo']=="hombre") {
                    echo "Usted es un hombre<br>";
                }elseif ($_POST['sexo']=="mujer") {
                    echo "Usted es una mujer<br>";
                }
            }

            if (isset($_POST['aficiones'])) {
                echo "Has seleccionado : " . count($_POST['aficiones']) . " aficiones<br>";
                    foreach ($_POST['aficiones'] as $k => $v) {
                        echo "Afición: " . $v . "<br>";
                    }
                } else {
                    echo "<p align='center'><b>No tienes ninguna afición, pedazo de soso<b></p>";
                }
         }else{

         
        ?>

        <form method='post' name='formulario' action='tres.php'>
            <b>Indique su sexo y aficiones:</b>
            <br>
            <b>Sexo:</b>
            <label><input type="radio" name="sexo" value="hombre">Hombre</label>
            <label><input type="radio" name="sexo" value="mujer">Mujer</label>
            <br>
            <b>Aficiones:</b>
            <label><input type="checkbox" name="aficiones[]" value="Cine">Cine</label>
            <label><input type="checkbox" name="aficiones[]" value="Literatura">Literatura</label>
            <label><input type="checkbox" name="aficiones[]" value="Música">Música</label>
            <br>
            <input type="submit" value='Enviar' name='btnEnv' class='btn btn-primary'>
            <input type="reset" value='Borrar' name='btnRes' class='btn btn-primary'>
        </form>
    </div>
    <?php
        }
    ?>
    </body>
</html>