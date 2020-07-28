<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario contacto</title>
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="wrap">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
                <input type="text" name="name" id="" class="form-control" placeholder="Nombre:" value="<?php  if(!$sending && isset($name)){ echo $name; }  ?>">
                <input type="email" name="email" id="" class="form-control" placeholder="Correo:" value="<?php  if(!$sending && isset($email)){ echo $email; }  ?>">
                <textarea name="message" id="message" placeholder="Mensaje:" class="form-control" cols="30" rows="10" value="<?php  if(!$sending && isset($message)){ echo $message; }  ?>"></textarea>
                <?php if (!empty($errors)): ?>
                    <div class="alert error">
                        <?php echo $errors ?>
                    </div>
                <?php elseif ($sending): ?>
                    <div class="alert success"> 
                        <p>Enviado correctamente</p>
                    </div>
                <?php endif  ?>
                
               
                <input type="submit" name='submit' class="btn btn-primary" value="Enviar correo">
            </form>
        </div>
    </body>
</html>