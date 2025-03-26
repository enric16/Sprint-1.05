<?php

class Dog extends Animal {

    public function __construct(string $nom) {
        parent::__construct($nom);
    }

    public function makeSound() {
        echo "El gos $this->nom diu: Bup, bup!" . "<br>";             
    }

}

?>