<?php

try {

    $conection = new PDO('mysql:host=127.0.0.1;dbname=pagination', 'root', '');

    $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
    $post_forPage = 5;

    $inicio = ($pagina > 1 ) ? ($pagina * $post_forPage - $post_forPage) : 0;

    $articles = $conection->prepare(
        "SELECT SQL_CALC_FOUND_ROWS *
        FROM articulos LIMIT $inicio, $post_forPage"
    );
    $articles->execute();
    $articles = $articles->fetchAll();

    if (!$articles) {
        header('Location: ./index.php');
    }

    $totals = $conection->query('SELECT FOUND_ROWS() as total');
    $totals = $totals->fetch()['total'];
    //echo $totals;
    $numberPages = ceil ($totals / $post_forPage);

}catch (PDOException $e){
    echo "ERROR: " . $e->getMessage();
    die();
} 



require 'view.index.php';

?>