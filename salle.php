<?php


require_once('epee.php');
require_once('baton.php');
require_once('gobelin.php');
require_once('magiciennoir.php');
require_once('dragon.php');
require_once('guerrier.php');
require_once('magicien.php');
require_once('paladin.php');
require_once('gameplay.php');

session_start();
if ( isset( $_SESSION['personnage'] ) )
{
    $personnage = unserialize($_SESSION['personnage']);
};
if ( isset( $_SESSION['jeu'] ) )
{
    $jeu = unserialize($_SESSION['jeu']);
}else{
    $jeu = new GamePlay();
};


//APPARITION DU MONSTRE
    if($jeu->apparitionMonstre()) {
        echo 'Un ';
        switch ($jeu->selectMonstre()) {
            case 0:
                $ennemi = new Gobelin();
                echo $ennemi->nom();

                break;
            case 1:
                $ennemi = new MagicienNoir();
                echo $ennemi->nom();

                break;
            case 2:
                $ennemi = new Dragon();
                echo $ennemi->nom();

                break;
        }
        echo ' sauvage apparaît ! <br> A toi de jouer ' . $_SESSION['name'] . '!';
        $_SESSION['ennemi'] = serialize($ennemi);
        $_SESSION['personnage'] = serialize($personnage);

        echo
        '<form action="attaquer.php" method="POST">
            <input type="submit" value="Engager le combat !">
        </form>';
    }


?>


