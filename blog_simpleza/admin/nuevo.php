<?php session_start();

require 'config.php';
require '../functions.php';

comprobarSession();

$conexion = conexion($bd_config);

if(!$conexion){
    header('Location: ../error.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $titulo = limpiar_datos($_POST['titulo']);
    $extracto = limpiar_datos($_POST['extracto']);
    $texto = limpiar_datos($_POST['texto']);
    $thumb = $_FILES['thumb']['tmp_name'];
    $archivo_subido = '../'.$blog_config['carpeta_imagenes'] . $_FILES['thumb']['name'];
    move_uploaded_file($thumb,$archivo_subido);
    
    $statement = $conexion->prepare("
    INSERT INTO `articulos` 
    (`id`, `titulo`, `fecha`, `texto`, `thumb`, `extracto`) 
    VALUES (NULL, :titulo, current_timestamp(), :texto,
    :thumb, :extracto);");

    $statement->execute(array(
        ':titulo' => $titulo,
        ':extracto' => $extracto,
        ':texto' => $texto,
        ':thumb' => $_FILES['thumb']['name']
    ));
    header('Location' . RUTA . 'admin');
}

require '../views/nuevo.view.php'

?>