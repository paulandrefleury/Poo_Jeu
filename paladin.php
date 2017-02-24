<?php

/**
 * Created by PhpStorm.
 * User: G551JW
 * Date: 22/02/2017
 * Time: 16:34
 */
class paladin extends Personnage
{
    public function lancerUnSort(Personnage $perso)
    {
        if ($this->degats >= 0 && $this->degats <= 25)
        {
            $this->atout = 4;
        }
        elseif ($this->degats > 25 && $this->degats <= 50)
        {
            $this->atout = 3;
        }
        elseif ($this->degats > 50 && $this->degats <= 75)
        {
            $this->atout = 2;
        }
        elseif ($this->degats > 75 && $this->degats <= 90)
        {
            $this->atout = 1;
        }
        else
        {
            $this->atout = 0;
        }

        if ($perso->id == $this->id)
        {
            return self::CEST_MOI;
        }

        if ($this->atout == 0)
        {
            return self::PAS_DE_MAGIE;
        }

        if ($this->estEndormi())
        {
            return self::PERSO_ENDORMI;
        }

        $perso->timeEndormi = time() + ($this->atout * 6) * 3600;

        return self::PERSONNAGE_ENSORCELE;
    }

    public function recevoirDegats()
    {
        if ($this->degats >= 0 && $this->degats <= 25)
        {
            $this->atout = 4;
        }
        elseif ($this->degats > 25 && $this->degats <= 50)
        {
            $this->atout = 3;
        }
        elseif ($this->degats > 50 && $this->degats <= 75)
        {
            $this->atout = 2;
        }
        elseif ($this->degats > 75 && $this->degats <= 90)
        {
            $this->atout = 1;
        }
        else
        {
            $this->atout = 0;
        }

        $this->degats += 5 - $this->atout;

        // Si on a 100 de dégâts ou plus, on supprime le personnage de la BDD.
        if ($this->degats >= 100)
        {
            return self::PERSONNAGE_TUE;
        }

        // Sinon, on se contente de mettre à jour les dégâts du personnage.
        return self::PERSONNAGE_FRAPPE;
    }
}