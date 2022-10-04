<?php
require_once("ClassCat.php");
require_once("ClassAnimal.php");
require_once("ClassFeline.php");


$animal= new Animal("Felix",9,TRUE,"dog");
$cat1= new Cat("Felix",9,TRUE,"cat","persian");
//echo $cat1->move("forward");
//echo $cat1->breath();
echo $cat1->move();
echo"<br>";
echo Cat::$breed; //static class"
echo"<br>";
echo $cat1->age;
echo"<br>";
echo $animal->age;
echo"<br>";
$tiger1=new tiger();
echo $tiger1->getFelineWhisker();
echo $cat1->showCAt();

/*
Static properties or methods are ones we can access without having 
to instantiate an object of their class. It's not because their
value is not going to change. There is "const" for that.

6




*/