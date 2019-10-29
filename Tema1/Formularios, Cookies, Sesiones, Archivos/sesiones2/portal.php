<?php
    session_start();
    if (!isset($_SESSION['usuario'])) {
        //Si no existe volvemos a index
        header('Location:index.php');
        die();
    }

    function fondo($color){
        echo "<body style='background-color:$color'>";
    }

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    
    <title>Portal</title>
</head>

    <?php
        if ($_SESSION['usuario']=='admin') {
            fondo("#8bf6ff");
        }else{
            fondo("#63ccff");            
        }
    ?>

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

    <!------------------------------------------------------------------------------------------------------- -->
    <br><br><br>
    <div class="container mt-6 text-center">
        <?php
            if ($_SESSION['usuario']='admin') {
                echo 
                    "<a href='admin.php' class='btn btn-success'>Administracion</a>
                    &nbsp;
                    <a href='gestion.php' class='btn btn-success'>Gestión</a>";
                
            }
        ?>
        <a href='info.php' class='btn btn-info'>Información</a>
    </div>




    <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="#">Hidden brand</a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav> -->


    </div>
</body>
</html>