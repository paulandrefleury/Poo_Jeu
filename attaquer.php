<?php
require_once('guerrier.php');
require_once('magicien.php');
require_once('paladin.php');
require_once('gameplay.php');
require_once('gobelin.php');
require_once('magiciennoir.php');
require_once('dragon.php');
session_start();
if ( isset( $_SESSION['personnage'] ) )
{
    $ennemi = unserialize($_SESSION['ennemi']);
    $personnage = unserialize($_SESSION['personnage']);

};
?>

    <div class="">
        <div class="">
            <div class="">
                <h1>READY ? FIGHT !</h1>

                <?php
                if(!isset($_POST['flag'])){
                    $flag = 0;
                }else{
                    $flag=1;
                } ?>

                <?php
                if($personnage->mort()){
                    echo 'Tu es mort... RIP <br>
<a href="index.php">Retourner au menu principal</a>';
                }


                else if($ennemi->mort()){
                    echo 'Tu as gagné !<br>
        <form method="POST" action="salle.php">
            <input type="submit">            
        </form>';

                }


                else if($flag == 0){
                    echo '
        <form action="attaquer.php" method="POST">
              <input type="hidden" name="flag" value="1" >
              <input type="submit" value="Attaquer" name="move">
              <input type="submit" value="Lancer un sort" name="move">
        </form>
                            ';}

                else{
                    ?>
                    <div class="col-lg-12 ">
                        <?php
                        if(isset($_POST['move'])){
                            if($_POST['move']=="Attaquer"){
                                $personnage->AtkPhysique($ennemi);
                                echo '<br>';
                                $ennemi->agro($personnage);

                            }else if($_POST['move']=="Lancer un sort"){
                                $personnage->AtkMagique($ennemi);
                                echo '<br>';
                                $ennemi->agro($personnage);
                            }}
                        ?>
                    </div>
                    <?php
                    echo'
        <form action="attaquer.php" method="POST">
              <input type="hidden" name="flag" value="1" >
              <input type="submit" value="Attaquer" name="move" >
              <input type="submit" value="Lancer un sort" name="move" >
        </form>
                   ';}
                ?>
            </div>

        </div>
        <hr>

        <?php
        echo "<h1>Combat :</h1>". "<br>"	;
        ?>
        <div class="row">
            <div class="col-lg-6 grey">

                <?php
                echo '<h3>Personnage</h3>';

                echo 'Nom : ' . $_SESSION['name'] . '<br>';

                echo 'Ta classe : ' . $personnage->classe(). '<br>';

                echo 'Points de vie : ' . $personnage->vie(). '<br>';

                echo 'Attaque : ' . $personnage->attaque(). '<br>';

                echo 'Magie : ' . $personnage->magie(). '<br>';

                ?>
            </div>
            <div class="separate"></div>
            <div class="col-lg-6 grey">
                <?php

                echo '<h3>Ennemi</h3>';

                echo 'Type : ' . $ennemi->nom(). '<br>';

                echo 'Points de vie : ' . $ennemi->vie(). '<br>';

                echo 'Attaque : ' . $ennemi->attaque(). '<br>';


                ?>
            </div>
        </div>
        <?php

        $_SESSION['ennemi'] = serialize($ennemi);

        $_SESSION['personnage'] = serialize($personnage);

        ?>
    </div>