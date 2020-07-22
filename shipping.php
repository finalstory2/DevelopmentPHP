<?php

/*
if ($_POST['gender'] != '' and $_POST['Name'] != ''){
    print_r($_POST);
    $name = $_POST['Name'];
    $gender = $_POST['gender'];
    echo $name . ' ' .  $gender;
}else{
    header('Location: http://127.0.0.1/Curso%20PHP/form-coding.php');
}
*/

print_r($_GET);

if(!$_GET){
    header('Location: http://127.0.0.1/Curso%20PHP/form-coding-GET.php');
}

$name = $_GET['Name'];
$Surname = $_GET['Surname'];
$Mail = $_GET['Mail'];
$gender = $_GET['gender'];


?>