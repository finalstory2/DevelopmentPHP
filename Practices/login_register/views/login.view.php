<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/style.css">
        <script src="https://kit.fontawesome.com/db5a0a0049.js" crossorigin="anonymous"></script>
        <title>Iniciar Sesion</title>
    </head>
    <body>
        <div class="contenedor">
            <h2 class="title">Iniciar Sesion</h2>
            <h3 class="border"></h3>
            <form class="formulario" name="login" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <div class="form-group">
                    <i class="icono izquierda fa fa-user"></i><input type="text" name="usuario" id="" class="usuario" placeholder="Usuario:">
                </div>
                <div class="form-group">
                    <i class="icono izquierda fa fa-lock"></i><input type="password" name="password" id="" class="password_btn" placeholder="Contraseña:">
                    <i class="submit-btn fa fa-arrow-right" onclick="login.submit();"></i>
                </div>
                <?php if (!empty($errores)):  ?>
                <div class="error">
                    <ul>
                        <?php echo $errores ?>
                    </ul>
                </div>
                <?php else: ?>
                <?php endif; ?>
            </form>
            <p class="texto-registrate">
                ¿ Aun no tienes cuenta ?
                <a href="registrate.php">Registrate</a>
            </p>
        </div>
    </body>
</html>