<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
    <?php
        if (isset($_POST['btnEnv'])) {
            //Hemos pulsado enviar
            echo "Tu nombre es: ".$_POST['nombre'];
            echo "<br>Tu mail es: ".$_POST['email'];
            echo "<br>Tu fecha de nacimiento es: ".$_POST['fecha'];
            echo "<p class='text-center mt-5'>";
                echo "<a href='tres.php' class='btn btn-primary'>Volver</a>";
            echo "</p>";
        }else{
            //No he dado a enviar luego quiero pintar el formulario

    ?>
        <form name='form' action='tres.php' method='POST'>
            <input type="text" placeholder='TuNombre' name='nombre' required>
            <br>
            <input type="email" placeholder='Tu e-mail' name='email' required>
            <br>
            Fecha Nacimiento: &nbsp;<input type="date" name='fecha'>
            <br>
            <p class='text-center mt-10'>
                <input type="submit" value='Enviar' name='btnEnv' class='btn btn-primary'>
                <input type="reset" value='Borrar' name='btnRes' class='btn btn-primary'>                
            </p>
        </form>
    </div>
    <?php
        }
    ?>
</body>
</html>