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
        <h3 class="text-center">Ejercicio 5</h3>
        <h3 class="text-center">Formulario completo</h3>
        <br>
        <?php
         /*
           Escriba un formulario de recogida de datos personales que conste de dos páginas.
            •En la primera página se solicitan los datos.
            •Cuando procesemos los datos se mostrará toda la información introducida por el usuario o se informa de los errores cometidos.
         */

        if (isset($_POST['btnEnv'])) {

            echo "<p align='center'>";
            
            echo "<p align='center'>Su nombre es:<b> ".$_POST['nombre']."</b><br>";
            echo "<p align='center'>Sus apellidos son:<b> ".$_POST['apellidos']."</b><br>";

            if ($_POST['edad']=="0") {
                echo "<p align='center' class='text-danger'>ERROR! Debe seleccionar una opción.</p><br>";        
            }elseif ($_POST['edad']=="1") {
                echo "<p align='center'>Usted tiene <b>menos de 20 años</b><br>";                
            }elseif ($_POST['edad']=="2"){
                echo "<p align='center'>Usted tiene entre <b>20 y 40 años</b><br>";                
            }elseif ($_POST['edad']=="3"){
                echo "<p align='center'>Usted tiene entre <b>40 y 69 años</b><br>";                
            }else{
                echo "<p align='center'>Usted tiene <b>más de 60 años</b><br>";                
            }

            echo "<p align='center'>Su peso es de <b>".$_POST['peso']." kg</b></p>";

            $sexo = '';
            if (!empty($_POST['sexo'])) {
                $sexo = $_POST['sexo'];
            }
            if ($sexo=="hombre") {
                echo "<p align='center'>Usted es <b>hombre</b></p>";
            }elseif ($sexo=="mujer") {
                echo "<p align='center'>Usted es <b>mujer</b></p>";
            }else{
                echo "<p align='center' class='text-danger'>ERROR! Debe seleccionar una opción.</p>";        
            }

            if ($_POST['estado']=="soltero") {
                echo "<p align='center'>Su estado civil actual es <b>soltero/a</b></p>";
            }elseif ($_POST['estado']=="casado") {
                echo "<p align='center'>Su estado civil actual es <b>casado/a</b></p>";
            }elseif ($_POST['estado']=="otro") {
                echo "<p align='center'>Su estado <b>civil actual es diferente</b> a los disponibles en el formulario</p>";
            }else{
                echo "<p align='center' class='text-danger'>ERROR! Debe seleccionar una opción.</p>"; 
            }

            if (is_array($_POST['aficiones'])) {
                echo "<p align='center'>Usted ha seleccionado <b>".count($_POST['aficiones'])." aficiones </b></p>";
                foreach ($_POST['aficiones'] as $k => $v) {
                    echo "<p align='center'>Aficion :<b>".$v."</b></p>";
              }
            }

        
            echo "<p class='text-center mt-5'>";
                echo "<a href='cinco.php' class='btn btn-primary'>Volver</a>";
            echo "</p>";

            echo "</p>";

        }else{

        ?>
        
        <form action="cinco.php" method="post">
        <h4 align="center">Escriba los datos siguientes:</h4>
        <table align="center">
        <tbody>
            <tr>
                <td>
                    <b>Nombre:</b><br>
                    <input type="text" name="nombre" required>
                </td>
                <td>
                    <b>Apellidos:</b><br>
                    <input type="text" name="apellidos" required>
                </td>
                <td>
                    <b>Edad:</b><br>
                    <select name="edad">
                        <option value="0">...</option>
                        <option value="1">Menor de 20 años</option>
                        <option value="2">Entre 20 y 40 años</option>
                        <option value="3">Entre 40 y 69 años</option>
                        <option value="4">Mayor de 69</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <b>Peso:</b><br>
                    <input type="number" name="peso" min="1" max="150" required> kg
                </td>
                <td>
                    <b>Sexo:</b><br>
                    <label><input type="radio" name="sexo" value="hombre">Hombre</label>
                    <label><input type="radio" name="sexo" value="mujer">Mujer</label>
                </td>
                <td>
                    <b>Estado Civil:</b><br>
                    <label><input type="radio" name="estado" value="soltero">Soltero</label>
                    <label><input type="radio" name="estado" value="casado">Casado</label>
                    <label><input type="radio" name="estado" value="otro">Otro</label>
                </td>
            </tr>
        </tbody>
        </table>
        <table align="center">
        <tbody>
            <tr>
                <td rowspan="2"><b>Aficiones:</b></td>
                <td><label><input type="checkbox" name="aficiones[]" value="cine">Cine</label></td>
                <td><label><input type="checkbox" name="aficiones[]" value="literatura">Literatura</label></td>
                <td><label><input type="checkbox" name="aficiones[]" value="comics">Comics</label></td>
            </tr>
            <tr>
                <td><label><input type="checkbox" name="aficiones[]" value="deportes">Deporte</label></td>
                <td><label><input type="checkbox" name="aficiones[]" value="musica">Música</label></td>
                <td><label><input type="checkbox" name="aficioness[]" value="television">Televisión</label></td>
            </tr>
        </tbody>
        </table>
        <p align="center">
            <button type="submit" class="btn btn-primary" name="btnEnv">Enviar</button>
            <button type="reset" class="btn btn-primary" name="btnBor">Borrar</button>
        </p>
  </form>
    </div>
    <?php
        }
    ?>
    </body>
</html>