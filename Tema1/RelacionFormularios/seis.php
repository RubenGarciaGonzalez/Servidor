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
        <h3 class="text-center">Ejercicio 6</h3>
        <h3 class="text-center">Formulario completo</h3>
        <br>
        <?php
         /*
           6.- Formulario extra
           Hacer un formulario con al menos 10 controles checkbox y un <option> de multiselección, controlar
           ambos utilizando arrays y mostrar la información enviada.
         */
            if (isset($_POST['btnEnv'])) {
                //Hemos pulsado enviar, procesaremos los datos
                if (isset($_POST['juegos'])) {

                    echo "Has seleccionado: " . count($_POST['juegos']) . " videojuegos<br>";
                    foreach ($_POST['juegos'] as $k => $v) {
                        echo "Videojuego: " . $v . "<br>";
                    }
                } else {
                    echo "<p align='center'><b>No has seleccionado ningún videojuego</b></p>";
                }
                if (isset($_POST['plat'])) {
                    echo "<br>Has seleccionado :" . count($_POST['plat']) . " plataformas<br>";
                    foreach ($_POST['plat'] as $k => $v) {
                        echo "Plataforma: " . $v . "<br>";
                    }
                } else {
                    echo "<p align='center'><b>No juegas en ninguna plataforma, soso<b></p>";
                }
            } else {
            //Pinto el formulario

        ?>
        <form name='as' action='<?php echo $_SERVER['PHP_SELF']; ?>' method='POST'>
        <table align='center' cellpadding='5' cellspacing='5'>
        <tr align='center'>
            <td colspan='4' ><b>Elige Tus Videojuegos Favoritos</b></td>
        </tr>
            <tr>
                <td><input type="checkbox" name='juegos[]' value='Call of Duty'></td>
                <td>Call of Duty</td>
                <td><input type="checkbox" name='juegos[]' value='FIFA'></td>
                <td>FIFA</td>
            </tr>
            <tr>
                <td><input type="checkbox" name='juegos[]' value='League Of Legends'></td>
                <td>League Of Legends</td>
                <td><input type="checkbox" name='juegos[]' value='Arma III'></td>
                <td>Arma III</td>
            </tr>
            <tr>
                <td><input type="checkbox" name='juegos[]' value='Minecraft'></td>
                <td>Minecraft</td>
                <td><input type="checkbox" name='juegos[]' value='CyberPunk 2077'></td>
                <td>CyberPunk 2077</td>
            </tr>
            <tr>
                <td><input type="checkbox" name='juegos[]' value='The Witcher 3: Wild Hunt'></td>
                <td>The Witcher 3: Wild Hunt</td>
                <td><input type="checkbox" name='juegos[]' value='Dark Souls'></td>
                <td>Dark Souls</td>
            </tr>
            <tr>
                <td><input type="checkbox" name='juegos[]' value='Fortnite'></td>
                <td>Fortnite</td>
                <td><input type="checkbox" name='juegos[]' value='Sekiro'></td>
                <td>Sekiro</td>
            </tr>
            <tr>
                <td colspan='2'>Plataforma/s preferida a la hora de juegar</td>
                <td colspan='2'>
                    <select name="plat[]" multiple>
                        <option>PS4</option>
                        <option>XBOX One</option>
                        <option>PC</option>
                        <option>Switch</option>
                        <option>PSVita</option>
                        <option>Android</option>
                        <option>iOS</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan='4' align='center'>
                    <input type="submit" value='Enviar' name='btnEnv' class='btn btn-primary'>
                    <input type="reset" value='Borrar' name='btnRes' class='btn btn-primary'>          
                </td>
            </tr>
        </table>    
        </form>
    </div>
    <?php
       }
    ?>
    </body>
</html>