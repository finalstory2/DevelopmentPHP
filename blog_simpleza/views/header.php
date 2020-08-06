<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/db5a0a0049.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="<?php echo RUTA;?>css/estilos.css">
        <title>Simpleza</title>
    </head>
    <body>
        <header>
            <div class="contenedor">
                <div class="logo izquierda">
                    <p><a href="<?php echo RUTA; ?>">Simpleza</a></p>
                </div>
                <div class="derecha">
                    <form class="buscar" action="<?php echo RUTA; ?>/buscar.php" method="get">
                        <input type="text" placeholder="Buscar:" name="busqueda" id="busqueda">
                        <button type="submit" class="icono fa fa-search"></button>
                    </form>
                    <nav class="menu">
                        <ul>
                            <li><a href="https://github.com/finalstory2"><i class="fa fa-github"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/maciel-galeano-22665a194/"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="http://www.seitondev.com">Contacto Seiton <i class="icono fa fa-envelope"></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </header>