<?php

class Animal{
    public $name;
    public $age;
    public $movement="forward";

    public $vertebrates; //boolean
    public $type; //mamal, insect

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
    function __destruct() //destroys object
    {
        echo "- DESTROYED : " . $this->name . " type of " . $this->type . " age <br>";
    }*/
    function move(string $mov){
       $this->movement=$mov;
       return "I am moving: ".$this->movement."<br>";
    }
    function breath(){
        return "I am breathing<br>";
    }

}