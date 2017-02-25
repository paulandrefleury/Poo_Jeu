<?php

require_once('guerrier.php');
require_once('magicien.php');
require_once('paladin.php');

session_start();
?>

<div class="container flex">
<h2>Salutation <?php echo $_POST['name'] ?>, Tu as choisis le <?php echo $_POST['classe'] ?></h2>
<form action="salle.php" method="POST" class="game">
    <input type="submit" value="Partir à l'aventure !" >
</form>


<?php
if($_POST['classe'] == "Guerrier"){
$perso = new Guerrier();
$_SESSION['personnage'] = serialize(new Guerrier());
}else if($_POST['classe'] == "Magicien" ){
    $perso = new Magicien();
    $_SESSION['personnage'] = serialize(new Magicien());
}else if($_POST['classe'] == "Paladin"){
    $perso = new Paladin();
    $_SESSION['personnage'] = serialize(new Paladin());


}else {
    echo "Erreur";
}

?>
<hr>
<?php
echo "<h1>Tes Statistiques</h1>". "<br>"	;
?>
<div class="row">
    <div class="col-lg-6 grey push-lg-3">
        <?php

        echo '<p>Ta classe : ' . $perso->classe(). '</p>';

        echo '<p>Points de vie : ' . $perso->vie(). '</p>';

        echo '<p>Attaque : ' . $perso->attaque(). '</p>';

        echo '<p>Magie : ' . $perso->magie(). '</p>';

        $_SESSION['name'] = $_POST['name'];
        ?>
    </div>
</div>
</div>