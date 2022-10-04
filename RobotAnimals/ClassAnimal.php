<?php
require_once("interfaces.php");
class Animal implements AliveAnimal{
    
    public $name;
    public $age;
    public $movement="forward";

    public $vertebrates; //boolean
    public $type; //mamal, insect

    public function __construct(string $name,int $age, string $type) //constructor
    {
        // when we create a constructor we can add arguments and then initialize the properties with those argument values
        $this->name=$name;
        $this->age = $age;
        $this->type=$type;
        $this->movement="forward";
        echo "+ " . $this->name . " CREATED +<br>";
    }/*
    function __destruct() //destroys object
    {
        echo "- DESTROYED : " . $this->name . " type of " . $this->type . " age <br>";
    }*/
    
    public function breath():string{
        return "I am moving: ".$this->movement."<br>";

    }
    public function move():string{
        return "I am breathing<br>";
            
    }
    
    function sound(){
        return "default sound";
    }
 

}