<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Formularios</title>


</head>
<body style="background-color:silver">
    <div class="containner mt-5">

    <?php
        if (isset($_POST['btnEnv'])) {
            //Hemos pulsado enviar, procesaremos los datos
            if (isset($_POST['deportes'])) {
                if (is_array($_POST['deportes'])) {
                    echo "Has seleccionado: ".count($_POST['deportes'])." elementos <br>";
                    foreach ($_POST['deportes'] as $k => $v) {
                        echo "Deporte: $k=".$v."<br>";
                  }
                }else{
                    echo "No has seleccionado ningun deporte";
                }
                if(isset($_POST['afi'])){
                    echo "<br>Seleccionaste :".count($_POST['afi']). " Aficiones<br>";
                    foreach ($_POST['afi'] as $k => $v) {
                        echo "Aficion: $k=".$v."<br>";
                    }
                }else{
                    echo "No tienes aficiones, aburrio de mierda";
                }
            }   
        }else{
            //Pinto el formulario

    ?>
        <form name='as' action='<?php echo $_SERVER['PHP_SELF']; ?>' method='POST'>
        <table align='center' cellpadding='5' cellspacing='5'>
        <tr align='center'>
            <td colspan='4' ><b>Elige Tu Deporte/s Favoritos</b></td>
        </tr>
            <tr>
                <td><input type="checkbox" name='deportes[]' value='Tenis'></td>
                <td>Tenis</td>
                <td><input type="checkbox" name='deportes[]' value='Futbol'></td>
                <td>Futbol</td>
            </tr>
            <tr>
                <td><input type="checkbox" name='deportes[]' value='PingPong'></td>
                <td>PingPong</td>
                <td><input type="checkbox" name='deportes[]' value='Esgrima'></td>
                <td>Esgrima</td>
            </tr>
            <tr>
                <td><input type="checkbox" name='deportes[]' value='Padle'></td>
                <td>Padle</td>
                <td><input type="checkbox" name='deportes[]' value='Surf'></td>
                <td>Surf</td>
            </tr>
            <tr>
                <td><input type="checkbox" name='deportes[]' value='Alpinismo'></td>
                <td>Alpinismo</td>
                <td><input type="checkbox" name='deportes[]' value='Karate'></td>
                <td>Karate</td>
            </tr>
            <tr>
                <td><input type="checkbox" name='deportes[]' value='Programar'></td>
                <td>Programar</td>
                <td><input type="checkbox" name='deportes[]' value='Atletismo'></td>
                <td>Atletismo</td>
            </tr>
            <tr>
                <td colspan='2'>Aficiones</td>
                <td colspan='2'>
                    <select name="afi" multiple>
                        <option>Lectura</option>
                        <option>Cine</option>
                        <option>Deportes</option>
                        <option>Musica</option>
                        <option>Netflix</option>
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