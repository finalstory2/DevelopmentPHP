<?php require 'header.php' ?>
        <div class="contenedor">
            <h2><?php echo $titulo ?></h2>
            <?php foreach ($resultados as $resultado): ?>
                <div class="post">
                    <article> 
                        <h2 class="titulo"><?php echo $resultado['titulo'] ?></h2>
                        <p class="fecha"><?php echo fecha($resultado['fecha']); ?></p>
                        <div class="thumb">
                            <img src="<?php echo RUTA;?>/imagenes/<?php echo $resultado['thumb'] ?>" alt="">
                        </div>
                        <p><?php echo $resultado['texto'] ?></p>
                    </article>
                </div>
            <?php endforeach; ?>    
        </div>
        <?php require 'footer.php' ?>
    </body>
</html>