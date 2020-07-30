<?php

require 'basic_functions.php';
comprobate_session();

$errores = '';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = filter_var(strtolower($_POST['usuario']), FILTER_SANITIZE_STRING);
    $password = $_POST['password'];
    $password = hash('sha512',$password);
    
    try {
        
        $conection = new PDO('mysql:host=127.0.0.1;dbname=clientes', 'root', '');
        $statment = $conection-> prepare("
        SELECT * FROM USUARIOS 
        WHERE USUARIO = :usuario
        AND PASSWORD = :password
        ");
        $statment->execute(array 
        (':usuario' => $usuario,
         ':password'=>$password));
        $result = $statment->fetch();
        if ($result !== false) {
            $_SESSION['$usuario'] = $usuario;
            
            header('Location: index.php');
        }else {
            $errores .= "<li>Datos incorrectos</li>";
        }


    } catch (\Throwable $th) {
        echo 'ERROR: ' . $th->getMessage();
    }

}

require 'views/login.view.php';

?>