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
        <h3 class="text-center">Ejercicio 2</h3>
        <h3 class="text-center">Dos valores numéricos</h3>
        <br>
        <?php
         /*
            2 - Escriba un formulario de recogida de datos personales que conste de dos páginas.
                •En la primera página se solicitan la edad y el peso.
                •En la segunda página se muestran la edad y el peso indicados por el usuario o se informa de los errores cometidos.
                Notas:
                •Cuando procesemos los datos se mostrará un aviso si la edad se deja vacía, si no se escribe un número,
                si no se escribe un número entero positivo o si se escribe un número que no esté comprendido entre 5 y 130.
                •Se mostrará un aviso si el peso se deja vacía, si no se escribe un número o si se escribe un número que no esté comprendido
                entre 10 y 150.
                •La edad debe ser un número entero, pero el peso puede tener decimales. 
         */

        if (isset($_POST['btnEnv'])) {
            //Hemos pulsado enviar
            if ($_POST['edad'] == "") {
                echo "<p class='text-danger'>ERROR! No ha introducido su edad.</p>";
            } elseif (!is_numeric($_POST['edad'])) {
                echo "<p class='text-danger'>ERROR! No ha introducido su edad como número.</p>";
            } elseif (!ctype_digit($_POST['edad'])) {
                echo "<p class='text-danger'>ERROR! No ha introducido un número positivo.</p>";
            } elseif ($_POST['edad'] < 5||$_POST['edad'] > 130) {
                echo "<p class='text-danger'>ERROR! Su edad no está comprendida entre el rango permitido.</p>";
            }else{
                echo "Tu edad son ".$_POST['edad']." años<br>";
            }

            if ($_POST['peso'] == "") {
                echo "<p class='text-danger'>ERROR! No ha introducido su peso.</p>";
            } elseif (!is_numeric($_POST['peso'])) {
                echo "<p class='text-danger'>ERROR! No ha introducido su peso como número.</p>";
            } elseif ($_POST['peso'] < 10|| $_POST['peso'] > 150) {
                echo "<p class='text-danger'>ERROR! Su peso no está comprendido entre el rango permitido.</p>";
            }else{
                echo "Tu peso es de ".$_POST['peso']." kilos<br>";
            }
            echo "<p class='text-center mt-5'>";
                echo "<a href='dos.php' class='btn btn-primary'>Volver</a>";
            echo "</p>";
        }else{
            //No he dado a enviar luego quiero pintar el formulario
    
        ?>

        <form method='post' name='formulario' action='dos.php'>
        <div class="form-group" align="center">
            <label for="edad">Introduce tu edad:</label>
            <input type="number" name="edad" min="5" max="130" placeholder="Edad">
        </div>
        <div class="form-group" align="center">
            <label for="peso">Introduce tu peso:</label>
            <input type="number" step="any" name="peso" min="10" max="150" placeholder="Peso">
        </div>
        <div class="form-group" align="center">
        <button type="submit" class="btn btn-primary" name="btnEnv">Enviar</button>
        <button type="reset" class="btn btn-primary" name="btnBor">Borrar</button>
        </div>
        </form>
    </div>
    <?php
        }
    ?>
    </body>
</html>