<?php

function comprobate_session() {
    
    if(isset($_SESSION['usuario'])){
        header('Location index.php');
    }

}

?>