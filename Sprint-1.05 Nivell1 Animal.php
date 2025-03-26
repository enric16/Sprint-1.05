<?php

abstract class Animal {
    protected $nom;

    public function __construct(string $nom) {
        $this->nom = $nom;
    }

    abstract public function makeSound();
    
}

?>