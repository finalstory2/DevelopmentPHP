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
                <h1 class="titulo">Subir imagen</h1>
            </div>
        </header>
        <div class="contenedor">
            <form  class='formulario' enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                <label for="foto">Selecciona tu foto</label>
                <input type="file" name="foto" id="foto">
                <label for="titulo">Titulo de la foto</label>
                <input type="text" name="titulo" id="titulo">
                <label for="texto">Descripcion:</label>
                <textarea name="texto" id="texto" placeholder="Ingresa una descripcion:"></textarea>
                <input class="submit" type="submit" value="Subir foto">
                <?php if (isset($error)): ?>
                    <p class='error'> <?php echo $error ?> </p>
                <?php endif?>
            </form>
        </div>
        <footer>
            <p class="copyright">
                Galeria creada por Maciel Galeano
            </p>
        </footer>


    </body>
</html>