<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    </head>
    <link rel="stylesheet" href="style.css">
    <title>Inicio de sesión</title>
</head>
<body>
    <form action="index.php" method="post" name="form">
    <div class="container mt-5">
        <label for="nombre"><b>Usuario</b></label>
        <input type="text" placeholder="Introduzca su nombre de usuario" name="nombre" required>

        <label for="contraseña"><b>Contraseña</b></label>
        <input type="password" placeholder="Introduzca su contraseña" name="contraseña" required>
        
        <div class="text-center ">
            <button type="submit" name="btnLogear">Login</button>
            <a href="nuevousuario.php">Crear nuevo usuario</a>
        </div>
        <label>
        <input type="checkbox" checked="checked" name="recordar"> Recordar nombre de usuario
        </label>
    </div>
    </form> 
</body>
</html>