<?php



$result = file_exists('document.txt');
var_dump($result);

//read information and write

//file_put_contents('document.txt',"ARRIBA ESPAÑA!!! \n", FILE_APPEND);
echo file_get_contents('document.txt');

$archivo = file('document.txt');
print_r($archivo);

?>