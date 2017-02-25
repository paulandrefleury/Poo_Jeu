<?php

session_start();
session_destroy();
?>

    <div class=" ">
        <div class="">
            <div class="col-lg-6">
                <h1>Choisis ta classe</h1>

                <p>
                <ul>
                    <li>Guerrier : Résistant, fort en attaque et très faible en magie</li>
                    <li>Magicien : Peu de Point de vie, mais fort en magie</li>
                    <li>Paladin : Mixte des deux personnages (stats équilibrées)</li>
                </ul>
                </p>


                <form method="post" action="jeu.php">
                    <label>Nom : </label> <input type="text" name="name">
                    <select name="classe">
                        <option value="Guerrier">Guerrier</option>
                        <option value="Magicien">Magicien</option>
                        <option value="Paladin">Paladin</option>
                    </select>
                    <input type="submit">
                </form>

            </div>
        </div>
    </div>