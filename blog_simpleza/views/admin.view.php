<?php require '../views/header.php' ?>

<div class="contenedor">
    <h2>Panel de control</h2>
    <a class="btn" href="nuevo.php">Nuevo post</a>
    <a class="btn" href="cerrar.php">Cerrar Sesion</a>
    <?php foreach($posts as $post):?>
        <div class="post">
            <article>
                <h2 class="titulo"><?php echo $post['id'] . '.-' . $post['titulo']?></h2>
                <a href="editar.php?id=<?php echo $post['id'] ?>">Editar</a>
                <a href="<?php echo RUTA . 'single.php?id=' . $post['id'] ?>">Ver</a>
                <a href="borrar.php?id=<?php echo $post['id'] ?>">Borrar</a>
            </article>
        </div>
    <?php endforeach;?>

</div>
<?php require '../paginacion.php'; ?>
<?php require '../views/footer.php'; ?>