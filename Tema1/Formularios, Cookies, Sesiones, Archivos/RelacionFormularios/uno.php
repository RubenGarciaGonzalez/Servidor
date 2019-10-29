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
        <h3 class="text-center">Ejercicio 1</h3>
        <h3 class="text-center">Dos cajas de texto con comprobación</h3>
        <br>
        <?php
         /*
         Escriba un formulario de recogida de datos personales que conste de dos páginas.
            •En la primera página se solicitan el nombre y los apellidos. 
            •En la segunda página se muestran los dos textos introducidos por el usuario o se informa de los errores cometidos. 

         Nota:
            •Cuando procesemos los datos se mostrarán avisos si los campos nombre o apellidos se dejan vacíos.
         */

        if (isset($_POST['btnEnv'])) {
            //Hemos pulsado enviar
            echo "Tu nombre es: ".$_POST['nombre'];
            echo "<br>Tus apellidos son: ".$_POST['apellidos'];
            echo "<p class='text-center mt-5'>";
                echo "<a href='uno.php' class='btn btn-primary'>Volver</a>";
            echo "</p>";
        }else{
            //No he dado a enviar luego quiero pintar el formulario
    
        ?>

        <form method='post' name='formulario' action='uno.php'>
        <div class="form-group">
            <label for="nombre">Introduce tu nombre:</label>
            <input type="text" name="nombre" placeholder="Nombre" required>
        </div>
        <div class="form-group">
            <label for="apellidos">Introduce tus apellidos:</label>
            <input type="text" name="apellidos" placeholder="Apellidos" required>
        </div>
        <button type="submit" class="btn btn-primary" name="btnEnv">Enviar</button>
        <button type="reset" class="btn btn-primary" name="btnBor">Borrar</button>
        </form>
    </div>
    <?php
        }
    ?>
    </body>
</html>