<?php

class Cat extends Animal {

    public function __construct(string $nom) {
        parent::__construct($nom);
    }

    public function makeSound() {
        echo "El gat $this->nom diu: Meu!" . "<br>";             
    }

}

?>