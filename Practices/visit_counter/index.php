<?php



function counter_users() {
    $archivo = 'contador.txt';

    if (file_exists($archivo)){
        $counter = file_get_contents($archivo) + 1;
        file_put_contents($archivo, $counter);

        return $counter;
    }else {
        file_put_contents($archivo, 1);
        return 1;
    }

}



?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contador de visitas</title>
        <style>
            * {
                padding: 0;
                margin: 0;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                box-sizing: border-box;
            }

            body {
                background: #E8EEF2;
                color:#fff;
                font-family: "Oswald";
            }

            .visitantes {
                background: #BB1F35;
                width: 200px;
                border-radius: 5px;
                padding: 30px;
                margin: 30px auto; 
                text-align: center;
            }

            h1 {
                font-weight: normal;
                text-align: center;
                margin: 30px 0;
                color:#0D2C44;
            }

            .visitantes .numero {
                font-weight: normal;
                font-size: 60px;
                color:#fff;
            }

            .visitantes .texto {
                color: #fff;
                font-weight: normal;
                font-size: 30px;
            }
        </style>
    </head>
    <body>
        <h1>Contador de visitas</h1>
        <div class="visitantes">
            <p class="numero"><?php  echo counter_users();  ?></p>
            <p class="texto"></p>
        </div>
    </body>
</html>