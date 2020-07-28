<?php

class Person {
    public $name;
    public $age;
    public $country;

    public function MostrarInformacion(){
        return "hola mundo";
    }

    function __construct($name,$age,$country){
       $this-> $name = $name;
       $this-> $age = $age;
       $this-> $country = $country;
    }
      
}

class Student extends Person { 
    function __construct($name,$age,$country,$carrera){
        parent::__construct($name,$age,$country);
        $this-> $carrera = $carrera;
    }

}

$maciel = new Student('Maciel',18,'Uruguay','desarrollador');
$maciel->MostrarInformacion();

// $maciel -> name = 'Maciel Galeano';
// $maciel -> age = 28;
// $maciel -> country = 'Uruguay';
?>