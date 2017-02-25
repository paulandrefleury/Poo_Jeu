<?php

require_once ('Ennemies.php');
Class Ork extends Ennemies {

    public function __construct($nom, $life, $defense, $attack)
    {
        parent::__construct(
            $this->nom = 'Ork',
            $this->life = 100,
            $this->defense = rand(20,30),
            $this->attack = rand(20,30)
        );
    }

}