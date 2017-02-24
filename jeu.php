<?php

require_once "monstre.php";
require_once "coffre.php";

class jeu
{
 public $salle;


    public function actionSalle()
    {
        $salle=rand(0,2);

        if($salle == 0){
            echo 'continuer dans la salle suivante';
        }else if($salle == 1)
        {
            echo loot();
        }else{
            echo $monstre;
        }

    }

}