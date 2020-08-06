<?php

require './admin/config.php';
require './functions.php';


$conexion = conexion($bd_config);
if (!$conexion) {
    header('Location: error.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['busqueda'])){
    $busqueda = limpiar_datos($_GET['busqueda']);
    $statement = $conexion->prepare('SELECT * FROM ARTICULOS where titulo like :busqueda or texto like :busqueda');
    $statement->execute(array(':busqueda' => "%$busqueda%"));
    $resultados = $statement->fetchAll();
    if (empty($resultados)){
        $titulo = 'No se encontraron articulos con el resultado: ' . $busqueda;
    }else {
        $titulo = 'Resultado de la busqueda: ' . $busqueda;
    }
}else {
    header('Location: '. RUTA . 'index.php');
}

require './views/buscar.view.php';

?>