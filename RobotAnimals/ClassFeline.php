<?php


abstract class Feline{
    public $whiskerType;
    abstract public function getFelineWhisker();

}

class tiger extends Feline{

    public function getFelineWhisker(){
        echo "long whiser<br>";
    }
}