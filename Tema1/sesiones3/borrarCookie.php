<?php
    setcookie('contador', "", -1);
    setcookie('ultimaVez', "", -1);
    header ('Location:pagina.php'); 

    if (isset($_POST['borrarCookie'])) {
        setcookie('ckUsuario',"",-1);
        setcookie('ckPass',"",-1);
    }