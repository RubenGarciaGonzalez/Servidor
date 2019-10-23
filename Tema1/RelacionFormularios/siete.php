<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    </head>
    <title>Relación de formularios en PHP nº1</title>
</head>
<body style="background-color:#66ffa6"> 
    <div class="container, mt-4">
        <br>
        <?php
         /*
            Hacer un formulario con dos inputs de tipo file, uno para subir un archivo pdf de un tamaño máximo
            de 5Mb, mostraremos el error si el tipo mime no es pdf o el tamaño excede lo permitido. El archivo lo
            guardaremos un una carpeta “documentos” dentro del raíz de nuestro sitio de publicación. Ojo con los
            permisos de nuestra carpeta. El otro para subir una imágen del mismo tamaño máximo, la imagen la
            guardaremos con un nombre único en la carpeta imagen, esta imagen la mostraremos en la página
            donde procesemos el formulario.
         */


        function lanzarError($mensaje){
            echo "<div class='container text-center mt-5'>";
            echo "<p class='text-danger text-center text-weight-bold'>$mensaje</p>";
            echo "<a href='siete.php' class='btn btn-warning mt-5'>Volver</a>";
            echo "</div>";
            die();
        }

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

        if (isset($_POST['btnEnviar'])) {   
            //Procesamos el formulario
            // print_r($_FILES['foto']);
            // echo "<br>";
            if ($_FILES['pdf']['error']==2) {
                miError("El archivo excede el tamaño permitido!!!");
            }
            //Paso 1: compruebo quee efectivamente se ha subido el archivo (en principio en temp)
            if (is_uploaded_file($_FILES['pdf']['tmp_name'])) {
                $array=[
                    'application/pdf'   
                ];
                
                if (!in_array($_FILE['pdf']['type'], $array)) {
                    lanzarError("No es un archivo PDF !!!!");
                }
                //El archivo se subio correctamente
                $pdf=$_POST['pdf'];
                $foto=$_POST['foto'];
                $nombreP=$_FILES['pdf'];
                $nombreF=$_FILES['foto'];
                $id=time(); //marca de tiempo es un entero secuencial y único
                $nombrePDF='./documentos/'.$id.$nombreP; // le meto el id delante como nombre de archivo.
                $nombreFoto='./imagen/'.$id.$nombreF; // le meto el id delante como nombre de archivo.
                move_uploaded_file($_FILES['pdf']['tmp_name'], $nombrePDF);
                move_uploaded_file($_FILES['foto']['tmp_name'], $nombreFoto);
                verFicha($n,$e,$nombreFoto);
            }
            else{
                lanzarError("No se subió el archivo");
            }
        }else{

        ?>

        <div class="container mt-1">
            <h3 class='text-center bg-primary'>Ficheros</h3>
            <form name='sf' action='<?php echo $_SERVER['PHP_SELF'];?>' ENCTYPE="multipart/form-data" method='POST'>
                <input type="hidden" name='MAX_FILE_SIZE' value='5000000' />
                <b>Documento PDF</b>&nbsp;<input type="file" name="pdf">
                <br>
                <input type="hidden" name='MAX_FILE_SIZE' value='5000000' />
                <b>Foto</b>&nbsp;<input type="file" name='foto'>
                <p class='text-center mt-5'>
                    <input type="submit" value='Enviar' name='btnEnviar' class='btn btn-success'>
                </p>
            </form>
        </div>
    </div>
    <?php
        }
    ?>
    </body>
</html>