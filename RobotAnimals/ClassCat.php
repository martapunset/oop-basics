<?php
require_once("ClassAnimal.php");
class Cat extends ClassAnimal{

    
    public function __construct(string $name,int $age,bool $vertebrates, string $type) //constructor
    {
        // when we create a constructor we can add arguments and then initialize the properties with those argument values
        $this->name=$name;
        $this->age = $age;
         //$this->movement;
        $this->vertebrates = $vertebrates;
        $this->type=$type;
        echo "+ " . $this->name . " CREATED +<br>";


    }/*
    
    


}