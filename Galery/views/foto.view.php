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
                <h1 class="titulo">Foto: <?php if(!empty($foto['titulo']))
                { echo $foto['titulo']; } else { echo $foto['imagen']; } ?></h1>
            </div>
        </header>


        <div class="contenedor">
            <div class="foto">
                <img src="fotos/<?php echo $foto['imagen'] ?>" alt="">
                <p class="texto"><?php echo $foto['texto']; ?></p>
                <a class="regresar" href="index.php"><i class="fa fa-long-arrow-left"></i>Regresar</a>
            </div>
        </div>

        <footer>
        <footer>
            <p class="copyright">
                Galeria creada por Maciel Galeano
            </p>
        </footer>


    </body>
</html>