<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    </head>
    <link rel="stylesheet" href="style2.css">
    <title>Creación de usuario</title>
</head>
<body>
    <form action="nuevousuario.php" style="border:1px solid #ccc" method="POST" >
    <div class="container">
        <h1>Registro</h1>
        <p>Rellana los siguientes campos para crear tu usuario.</p>
        <hr>

        <label for="nombre"><b>Nombre de usuario</b></label>
        <input type="text" placeholder="Introduzca su nombre de usuario" name="nombre" required>

        <label for="contraseña"><b>Contraseña</b></label>
        <input type="password" placeholder="Introduzca su contraseña" name="contraseña" required>

        <label for="contraseñaRepeat"><b>Repite contraseña</b></label>
        <input type="password" placeholder="Introduzca nuevamente su contraseña" name="contraseñaRepeat" required>

        <label>
        <input type="checkbox" checked="checked" name="recuerda" style="margin-bottom:15px"> Recuerda el usuario
        </label>
        <div class="clearfix">
        <a href="index.php" >Cancel</button>
        <button type="submit" name="btnRegistro">Registrate</button>
        </div>
    </div>
    </form> 
</body>
</html>