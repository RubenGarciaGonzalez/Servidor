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
            if (isset($_POST['btnEnviar'])) {

                if ($_FILES['pdf']['error']==2) {
                    echo "<h3 class='text-center text-danger'>ERROR! El tamaño excede del permitido</h3>";
                    die();
                }

                if(is_uploaded_file($_FILES['pdf']['tmp_name'])){
                    $array=[
                        "application/pdf"
                    ];
                    if (!in_array($_FILES['pdf']['type'],$array)) {
                        echo "<h3 class='text-center text-danger'>ERROR! El archivo no corresponde con el tipo permitido</h3>";
                        die();                     
                    }

                    $documentos="documentos/";
                    opendir($documentos);
                    $destinoPdf=$documentos.$_FILES['pdf']['name'];
                    copy($_FILES['pdf']['tmp_name'],$destinoPdf);
                    echo "Archivos subidos exitosamente<br>";
                    $nombrePdf=$_FILES['pdf']['name'];
                    echo "El nombre del archivo subido es $nombrePdf";
                }

                
                $fotos="imagen/";
                opendir($fotos);
                $destinoFoto=$fotos.$_FILES['foto']['name'];
                copy($_FILES['foto']['tmp_name'],$destinoFoto );
                echo "Archivos subidos exitosamente<br>";
                $nombreFoto=$_FILES['foto']['name'];
                echo "<div class='container mt-5 border border-dark text-center'>";
                echo "<table border='0' cellpadding='3' cellspacing='3'>";
                echo "<tr align=center>";
                echo "<td colspan='2' align='center'><b>FICHA</b></td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>";
                    echo "<img src='imagen/$nombreFoto' class='rounded-circle' width='400px' height='300px'>";
                echo "<td>";
                echo "</tr>";

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