<?php session_start();

if(isset($_SESSION['usuario'])){
    header('Location index.php');
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    $errores = '';

    if (empty($usuario)){
        $errores .= '<li>Por favor ingresa usuario</li>';
    }

    if ( empty($password)) {
        $errores .= '<li>Por favor ingresa tu contraseña</li>';
    }

    if ( empty($password)) {
        $errores .= '<li>Por favor repite la contraseña</li>';
    }

    if ($password !== $password2) {
        $errores .= '<li>Las contraseñas no son iguales</li>';
    }


    if (!empty($password) or 
        !empty($password2) or 
        !empty($usuario) or 
        $password !== $password2
        ) {
            try {
                $conection = new PDO('mysql:host=127.0.0.1;dbname=clientes', 'root', '');
                $statment = $conection-> prepare("SELECT * FROM USUARIOS WHERE USUARIO = :usuario limit 1");
                $statment->execute(array (':usuario' => $usuario));
                $result = $statment->fetch();

                if ($result != false) {
                    $errores .= '<li>El nombre de usuario ya existe</li>';
                }

                $password = hash('sha512',$password);
                $password2 = hash('sha512',$password);



            } catch (\Throwable $th) {
                echo 'ERROR: ' + $th;
            }
    }
    if ($errores == ''){
        $statment = $conection->prepare("
            INSERT INTO USUARIOS (ID, USUARIO, PASSWORD) VALUES (NULL , :usuario, :pass);
        ");
        $statment->execute(array(
            ':usuario' => $usuario, 
            ':pass' => $password));
            header('Location: index.php');

    }


}
require 'views/registrate.view.php';

?>