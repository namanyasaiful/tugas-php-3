<?php
require_once 'Animal.php';
require_once 'Frog.php';
require_once 'Ape.php';

$sheep = new Animal("shaun");
echo "Name: " . $sheep->getName() . "<br>"; //shaun
echo "legs: " . $sheep->getLegs() . "<br>"; //4
echo "cold blooded: " . $sheep->getColdBlooded() . "<br>"; //no
echo "<br>";

$kodok = new Frog("buduk");
echo "Name: " . $kodok->getName() . "<br>"; //buduk
echo "legs: " . $kodok->getLegs() . "<br>"; //4
echo "cold blooded: " . $kodok->getColdBlooded() . "<br>"; //no
echo "Jump: " . $kodok->jump() . "<br>"; //Hop Hop
echo "<br>";

$sungokong = new Ape("kera sakti");
echo "Name: " . $sungokong->getName() . "<br>"; //kera sakti
echo "legs: " . $sungokong->getLegs() . "<br>"; //2
echo "cold blooded: " . $sungokong->getColdBlooded() . "<br>"; //no
echo "Yell: " . $sungokong->yell() . "<br>"; //Auoo 
?>