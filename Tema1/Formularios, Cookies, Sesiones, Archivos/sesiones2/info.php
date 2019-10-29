<?php
    session_start();
    if (!isset($_SESSION['usuario'])) {
        salir();
    }

    function salir(){
        header ('Location:index.php');
        die();
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    </head>
    <body>
        <div class="container float-right mt-1">
            <div class="from-group row float-right">
                <div class="col-xs-3">
                    <input type="text" class="form-control" value='<?php echo $_SESSION['usuario'];?>' readonly />
                </div>
                <div class="col-xs-2">
                    <a href="cerrar.php" class="btn btn-warning ml-1">Cerrar sesión  </a>
                </div>
            </div>
        </div>
        <div class="container">
            INFORMACIÓN
        </div>
    </body>
</html>