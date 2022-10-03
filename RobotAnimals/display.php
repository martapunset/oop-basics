<?php
require_once("ClassAnimal.php");

$cat1= new Animal("Felix",9,TRUE,"cat");
echo $cat1->move("forward");
echo $cat1->breath();
echo $cat1->movement;