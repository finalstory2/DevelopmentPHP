<?php session_start();

    if(($_SESSION['usuario']) !== '') {
        header('Location: contenido.php');
    }else {
        header('Location: registrate.php');
    }

?>