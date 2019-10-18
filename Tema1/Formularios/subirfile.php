<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Formularios</title>
    </head>

    <?php

        function miError($msj){
            echo "<div class='container text-center mt-5'>";
            echo "<p class='text-danger text-center text-weight-bold'>$msj</p>";
            echo "<a href='subirfile.php' class='btn btn-warning mt-5'>Volver</a>";
            echo "</div>";
            die();
        }


    ?>


    <body style="background-color:bisque">

    <?php

        //Funcion ver ficha
        function verFicha($u,$m,$f){
            echo "<div class='container mt-5 border border-dark text-center'>";
            echo "<table border='0' cellpadding='3' cellspacing='3'>";
            echo "<tr align=center>";
            echo "<td colspan='2' align='center'><b>FICHA</b></td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>";
                echo "<img src='".$f."' class='rounded-circle'>";
            echo "<td>";
            echo "</tr>";
            
            
        }


    ?>



    <?php

        if (isset($_POST['btnEnviar'])) {   
            //Procesamos el formulario
            // print_r($_FILES['foto']);
            // echo "<br>";
            if ($_FILES['foto']['error']==2) {
                miError("El archivo excede el tamaño permitido!!!");
            }
            //Paso 1: compruebo quee efectivamente se ha subido el archivo (en principio en temp)
            if (is_uploaded_file($_FILES['foto']['tmp_name'])) {
                $array=[
                    'image/png',
                    'image/jpeg',
                    'image/gif',
                    'image/tiff',
                    'image/bmp',
                    'image/x-icon',
                    'image/svg+xml'
                ];
                if (!in_array($_FILE['foto']['type'], $array)) {
                    miError("No es un archivo de imagen !!!!");
                }
                //El archivo se subio correctamente
                $n=$_POST['nombre'];
                $e=$_POST['email'];
                $nombreActual=$_FILES['foto']['name'];
                $id=time(); //marca de tiempo es un entero secuencial y único
                $nombreF='./perfiles/'.$id.$nombreActual; // le meto el id delante como nombre de archivo.
                move_uploaded_file($_FILES['foto']['tmp_name'], $nombreF);
                verFicha($n,$e,$nombreF);
            }
            else{
                miError("No se subió el archivo");
            }
        }else{

    ?>


        <div class="container mt-5">
            <h3 class='text-center bg-primary'>Subir Archivos</h3>
            <form name='sf' action='<?php echo $_SERVER['PHP_SELF'];?>' ENCTYPE="multipart/form-data" method='POST'>
                <input type="text" name="nombre" placeholder='Tu Nombre' required /><br>
                <input type="email" name="email" placeholder='Tu Correo' required /><br>
                <!-- Si quiero imponer un tamaño máximo al fichero   -->
                <input type="hidden" name='MAX_FILE_SIZE' value='500000' />
                <b>Tu Foto</b>&nbsp;<input type="file" name='foto'>
                <p class='text-center mt-5'>
                    <input type="submit" value='Enviar' name='btnEnviar' class='btn btn-success'>
                </p>
            </form>
        </div>

        <?php
        }
        ?>
    </body>
</html>