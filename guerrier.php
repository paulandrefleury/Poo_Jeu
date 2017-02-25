<?php

require_once ('personnage.php');

class Guerrier extends Personnage
{
    public
        $_classe = 'Guerrier',
        $_attaque = 30,
        $_defense = 50,
        $_magie = 1,
        $_vie = 150;
}