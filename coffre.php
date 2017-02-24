<?php

/**
 * Created by PhpStorm.
 * User: G551JW
 * Date: 24/02/2017
 * Time: 17:48
 */
class coffre
{
    protected $coffre;

    public function loot($coffre)
    {
       $coffre = rand(0,1);

        if($coffre == 1) {
            echo 'Vous avez reçu une épée';
        }else {
            echo 'Vous avez reçu un baton magique';
        }
    }
}