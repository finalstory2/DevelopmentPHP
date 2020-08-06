<?php 

require './admin/config.php';
require './functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $usuario = limpiar_datos($_POST['usuario']);
    $password = limpiar_Datos($_POST['password']);

    if ($usuario == $blog_admin['usuario'] && $password == $blog_admin['pass']){
        $_SESSION['admin'] = $blog_admin['usuario'];
        header('Location:' . RUTA . 'admin');
    }
}

require './views/login.view.php';

?>