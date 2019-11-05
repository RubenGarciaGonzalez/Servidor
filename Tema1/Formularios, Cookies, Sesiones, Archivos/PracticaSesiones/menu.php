<?php
    session_start();
    if (!isset($_SESSION['usuario'])) {
        salir();
    }

    function salir(){
        header ('Location:index.php');
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
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
    <title>Menú</title>
</head>

    <?php
        if ($_SESSION['tipo']=='Admin') {
            fondo("#8bf6ff");
        }elseif($_SESSION['tipo']=='Normal'){
            fondo("#63ccff");            
        }else{
            fondo("#4b636e");
        }
    ?>
    <div class="container float-right mt-1">
            <div class="from-group row float-right">
                <div class="col-xs-3">
                    <input type="text" class="form-control" value="<?php echo $_SESSION['usuario']." | Usuario: ".$_SESSION['tipo'];?>" readonly />            
                </div>
                <div class="col-xs-2">
                    <a href="cerrar.php" class="btn btn-danger ml-1">Cerrar sesión  </a>
                </div>
            </div>
        </div>

        <!------------------------------------------------------------------------------------------------------- -->
        <br><br><br>
        <div class="container mt-6 text-center">
            <?php
                if ($_SESSION["tipo"]=='Admin') {
                    echo 
                        "<a href='#' class='btn btn-success'>Menú</a>
                        &nbsp;
                        <a href='pagina1.php' class='btn btn-success'>Página 1</a>
                        &nbsp;
                        <a href='pagina2.php' class='btn btn-success'>Página 2</a>
                        &nbsp;
                        <a href='pagina3.php' class='btn btn-success'>Página 3</a>";
                    
                }elseif ($_SESSION["tipo"]=="Normal") {
                    echo
                        "<a href='#' class='btn btn-success'>Menú</a>
                        &nbsp;
                        <a href='pagina1.php' class='btn btn-success'>Página 1</a>";
                }else{
                    echo
                        "<a href='#' class='btn btn-success'>Menú</a>
                        &nbsp;
                        <a href='pagina1.php' class='btn btn-success'>Página 1</a>
                        &nbsp;
                        <a href='pagina2.php' class='btn btn-success'>Página 2</a>";
                }
            ?>
        </div>
    </body>
</html>