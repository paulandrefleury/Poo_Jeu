<?php

class Personnage
{
    private $_id
    private $_atk
    private $_magic
    private $_def
    private $_hp
    private $_weapon

    public function observer()
    {

    }

    public function porte()
    {

    }

    public function coffre()
    {

    }

    public function attaquer()
    {

    }

    public function fuir()
    {

    }

    public function id()
    {
        return $this->_id;
    }

    public function atk()
    {
        return $this->_atk;
    }

    public function magic()
    {
        return $this->_magic;
    }

    public function def()
    {
        return $this->_def;
    }

    public function hp()
    {
        return $this->_hp;
    }

    public function weapon()
    {
        return $this->_weapon;
    }

}