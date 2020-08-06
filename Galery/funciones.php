<?php

function conexion($base, $usuario, $pass) {
    try {
        $conexion = new PDO("mysql:host=localhost;dbname=$base",$usuario,$pass);
        return $conexion;
    } catch (\Throwable $th) {
        return false;
    }

}


?>