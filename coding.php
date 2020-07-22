<?php 
//variables y constantes


define('PI',3.14);
$pi = 3.14;
$diametro = 10;
$largoCircunferencia= PI * $diametro;

//----Arays
//Common array
$lenguages_array = array ('Java','Javascript','CSS','HTML');
//Associative array
$Employe= array(
    'Number_phone'=>'00000',
    'Age'=>25,
    'surname'=>'o-coner',
    'name'=>'Bryan'
);
//If I need return one value of the associastive array put this
//echo $Employe['Age'];

//Multi_demcional array
$Multi_dimencional = array(
    array ('Java','Javascript','CSS','HTML'),
    array ('Java','Javascript','CSS','HTML'));
echo $Multi_dimencional[0][0] . " ";

echo '<strong>' . $lenguages_array[1] . '</strong> <br>';

echo "Value of circunference: " . $largoCircunferencia;


//----Cicle For,foreach,while,if, switch

$countries = array('Uruguay','Argentina','Peru','Paraguay');

switch (false) {
    case 'value':
        # code...
        break;
    
    default:
        # code...
        break;
};

for ($i=0; $i < count($countries); $i++) { 
    # code...
}

function gretings(){

}


//----Functons
 
//Know the variable
//ar_dump($countries);
//Define Arrays
$array=array('values'); 
//Count elements in array
count($lenguages_array);
//Define constantsc
define('name',"Value");
//Return the type of variable
gettype($largoCircunferencia);
//Order Arrays
sort($countries);
rsort($countries);

//----Functons for strings 

$texto = '    hello my loves';
htmlspecialchars($texto);
//Remove blank spaces
trim($texto);
//Count characters of the variable
strlen($texto);
//Cut the variable, this depend in where cut
echo substr($texto,0,4);
//Transform the string to Uppercase and lowerCase
strtoupper($texto);
strtolower($texto);
//For search the position of something
strpos($texto, 'hello');

//----Functions for Arrays

//For extract the your array
echo '<br>';
extract($Employe);
echo $Age;


?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Coding.exe</title>
    </head>
    <body>
        <br>
        <h1 style="display: none;">Sub-Countries</h1>
        <ul>
            <?php
                $flag = false;

                if ($flag == true) {
                    foreach ($countries as $countrie) {
                        echo '<li>' . $countrie . '</li>';
                    }
                }
                ?>
                
                
        </ul>
    </body>
</html>
<?php

/* 
If i need a comparation and logical operators; In the next line I define there.

Logical Operators:
== Equals
!NOT
!=diferent

Comparations:
and -- or -- xor
*/

?>