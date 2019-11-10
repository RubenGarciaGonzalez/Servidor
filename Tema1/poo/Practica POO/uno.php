<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">    </head>
    <title>UNO</title>
</head>
<body style="background-color:bisque">
    <div class="container mt-3">
        <?php
            require('Coches.php');
            require('CochesVendidos.php');
             //Crear un array de 10 coches, inícializalos y muéstralos recorriendo el array
                $coche1=new CochesVendidos("Citroen","C4","4514-ABC","18526","10500","12-05-2009","15402");
                $coche2=new CochesVendidos("Mazda","MX-4","5982-ACC","95120","4256","12-05-2009","15402");
                $coche3=new CochesVendidos("Opel","Astra","5458-OKC","45126","9000","12-05-2009","15402");
                $coche4=new CochesVendidos("BMW","M4","7485-JKL","154230","9563","12-05-2009","15402");
                $coche5=new CochesVendidos("Porsche","Panamera","2452-DCS","87542","42320","12-05-2009","15402");
                $coche6=new CochesVendidos("Ferrari","La Ferrari","5421-LJK","49520","120000","12-05-2009","15402");
                $coche7=new CochesVendidos("Mitshubishi","ASX","2200-AJK","36452","12040","12-05-2009","15402");
                $coche8=new CochesVendidos("Mercedes","840-AMG","4512-OPS","231546","240000","12-05-2009","15402");
                $coche9=new CochesVendidos("SsanYong","Tivoli","8547-SEX","54215","13450","12-05-2009","15402");
                $coche10=new CochesVendidos("Mini Cooper","Mini","4598-WES","15230","15420","12-05-2009","15402");

                $array=[$coche1,$coche2,$coche3,$coche4,$coche5,$coche6,$coche7,$coche8,$coche9,$coche10];
                foreach ($array as $k => $value) {
                    echo "Coche ".$k." -> ".$value."<br>";
                }
                echo "<br>";
                CochesVendidos::venderCoches("1230-AJK");
 
        ?>
    </div>
</body>
</html>