<?php require 'header.php' ?>

<div class="post">
    <article>
        <h2 class="titulo">Nuevo articulo</h2>
        <form enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="formulario" method="post">
            <input type="text" name="titulo" placeholder="Titulo del articulo">
            <input type="text" name="extracto" placeholder="Extracto del articulo">
            <textarea name="texto" id="" cols="30" rows="10" placeholder="Texto del articulo"></textarea>
            <input type="file" name="thumb" id="">
            <input type="submit" value="Crear articulo">
		</form>
    </article>
</div>

<?php require 'footer.php'; ?>