<?php
require_once("ClassAnimal.php");
require_once("ClassFeline.php");

class Cat extends Animal {

    public static $breed="European"; //string static property
    
    public function __construct(string $name,int $age,bool $vertebrates, string $type,string $breed){//constructor
        parent ::__construct( $name, $age,$vertebrates,$type);
         //overriding atribbutes age*7
        $this->age=$this->age*7;
       self::$breed=$breed; //reasignation of a static property via constructor
    
    }   // when we create a constructor we can add arguments and then initialize the properties with those argument values
    public function showCat(){
        return "Name: ".$this->name."<br>
                Age: ".$this->age."<br>
                Vertebrate: ".$this->vertebrates."<br>
                Type: ".$this->type."<br>
                Breed: ".self::$breed;

    }  
    function purr(){
        return "purr";
    }
    //overriding methods sound=Meow
    function sound():string{    
        return "Meow";
    }

}
    
    


