<?php

include 'Sprint-1.05 Nivell1 Animal.php';
include 'Sprint-1.05 Nivell1 Dog.php';
include 'Sprint-1.05 Nivell1 Cat.php';

$gos1 = new Dog ("Rex");
$gos2 = new Dog ("Toby");
$gat1 = new Cat ("Garfield");
$gat2 = new Cat ("Sylvester");

$gos1->makeSound();
$gos2->makeSound();
$gat1->makeSound();
$gat2->makeSound();

?>