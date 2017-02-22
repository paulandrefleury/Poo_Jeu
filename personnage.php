<?php


class Personnage

{
    private $_id
    private $_atk
    private $_magic
    private $_def
    private $_hp
    private $_weapon
    private $_observer
    private $_porte
    private $_coffre
    private $_attaquer
    private $_fuir

    public function observer()
    {
        return $this->_observer;
    }

    public function porte()
    {
        return $this->_porte;
    }

    public function coffre()
    {
        return $this->_coffre;
    }

    public function attaquer()
    {
        return $this->_attaquer;
    }

    public function fuir()
    {
        return $this->_fuir;
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

    public function setId($id)
    {
        $id = (int) $id;

        if ($id > 0)
        {
            $this->_id = $id;
        }
    }
}