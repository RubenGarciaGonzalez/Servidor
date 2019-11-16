<?php
    setcookie("recordar","", -1);
    setcookie($_SESSION['usuarios'],"",-1); 
    header('Location:index.php');