<?php
require_once('arme.php');



class Personnage
{
    public

        $_classe,
        $_attaque,
        $_magie,
        $_defense,
        $_vie,
        $_nomArme = "Aucune",
        $_dmgArme = 0;


    // GETTERS //
    public function attaque()
    {
        return $this->_attaque;
    }
    public function classe()
    {
        return $this->_classe;
    }

    public function magie()
    {
        return $this->_magie;
    }

    public function defense()
    {
        return $this->_defense;
    }

    public function vie()
    {
        return $this->_vie;
    }
    public function nomArme()
    {
        return $this->_nomArme;
    }
    public function dmgArme()
    {
        return $this->_dmgArme;
    }

    public function pasmoinsdezero()
    {
        if ($this->_vie < 0) {
            $this->_vie = 0;
        }
    }
    public function AtkPhysique($cible)
    {
        $cible->_vie -= $this->attaque();
        $cible->pasmoinsdezero();
        echo ''.$_SESSION['name'].' attaque le '.$cible->nom().' ! <br> '.$cible->nom().' subit '.$this->attaque().' points de dégats !';
    }
    public function AtkMagique($cible)
    {
        $cible->_vie -= $this->magie();
        $cible->pasmoinsdezero();
        echo ''.$_SESSION['name'].' incante un sort sur le '.$cible->nom().' ! <br> '.$cible->nom().' subit '.$this->magie().' points de dégats !';

    }

    public function mort()
    {
        if ($this->_vie == 0){
            return true;
        }
    }
}