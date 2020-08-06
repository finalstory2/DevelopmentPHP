<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Galeria</title>
        <script src="https://kit.fontawesome.com/db5a0a0049.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./css/estilos.css">
    </head>
    <body>
        <header>
            <div class="contenedor">
                <h1 class="titulo">Mi galeria</h1>
            </div>
        </header>
        <section class="fotos">
            <div class="contenedor">
                <div class="paginacion">    
                    <a class="izquierda" href="subir.php"><i class="fa fa-plus"></i> Agregar imagen</a>
                </div>
                <?php foreach($fotos as $foto): ?>
                    <div class="thumb">
                        <a href="foto.php?id=<?php echo $foto['id']?>">
                            <img src="./fotos/<?php echo $foto['imagen'] ?>" alt="">
                        </a>
                    </div>
                <?php endforeach; ?>
                <div class="paginacion">

                    <?php if ($pagina_actual > 1): ?>
                        <a class="izquierda" href="index.php?p=<?php echo $pagina_actual-1 ?>"><i class="fa fa-long-arrow-left"></i> Pagina Anterior</a>
                    <?php else: ?>   
                    <?php endif;?>   
                    <?php?>   

                    <?php if ($total_paginas != $pagina_actual): ?>
                        <a class="derecha" href="index.php?p=<?php echo $pagina_actual+1 ?>">Pagina Siguiente <i class="fa fa-long-arrow-right"></i></a>
                    <?php else: ?>   
                    <?php endif;?>   

                    <!-- <a class="izquierda" href=""><i class="fa fa-long-arrow-left"></i> Pagina Anterior</a>
                    <a class="derecha" href="">Pagina Siguiente <i class="fa fa-long-arrow-right"></i></a> -->
                </div>
            </div>
        </section>
        <footer>
            <p class="copyright">
                Galeria creada por Maciel Galeano
            </p>
        </footer>


    </body>
</html>