<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body style='background-color:silver'>
    <div class="container mt-5">
    <?php
        if (isset($_POST['btnEnv'])) {
            //Hemos pulsado enviar
            $palabras[]=$_POST['pab1'];
            $palabras[]=$_POST['pab2'];
            $palabras[]=$_POST['pab3'];
            $palabras[]=$_POST['pab4'];

            sort($palabras);

            print_r($palabras);

            echo "<p class='text-center mt-5'>";
                echo "<a href='cuatro.php' class='btn btn-primary'>Volver</a>";
            echo "</p>";


        }else{
            //No he dado a enviar luego quiero pintar el formulario

    ?>
        <form name='form' action='cuatro.php' method='POST'>
            Palabra 1:<input type="text" placeholder='pab1' name='pab1' required>
            <br>
            Palabra 2:<input type="text" placeholder='pab2' name='pab2' required>
            <br>
            Palabra 3:<input type="text" placeholder='pab3' name='pab3' required>
            <br>
            Palabra 4:<input type="text" placeholder='pab4' name='pab4' required>
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