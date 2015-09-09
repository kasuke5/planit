<?php

require_once('connexion_sql.php');
//coBDD();

if (isset($_POST['submit'])) {
    $pseudo = htmlspecialchars(trim($_POST['pseudo']));
    $password = htmlspecialchars(trim($_POST['password']));

    if ($pseudo && $password) {

        $mdp = genererMDP();
        $reponse = $db->query("SELECT COUNT( *) pseudo FROM admin WHERE pseudo = '$pseudo'");
        while ($donnees = $reponse->fetch()) {
            $nb_pseudo = $donnees['pseudo'];
        }
        if ($nb_pseudo == 1) {

            ?>
            <div class="alert alert-dismissible alert-danger">
                <strong>Le Pseudo</strong> n'est pas disponible.
            </div>
        <?php


        } else if ($nb_pseudo == 0) {
            $inscription = $db->prepare("INSERT INTO admin VALUES ('', '$pseudo', '$password')");
            $inscription->execute();

            header("Refresh: 3;URL=home");
            ?>
            <div class="alert alert-dismissible alert-success">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>Inscription Terminée</strong> Vous ellez être redirigé dans quelques secondes si ce n'est pas le
                cas cliquez <a href="home" class="alert-link"> ICI</a>.
            </div>
        <?php

        }


    } else echo"
        <div class='alert alert-dismissible alert-danger'>
            <button type='button' class='close' data-dismiss='alert'>×</button>
            Veuillez remplir <strong>tous les champs</strong>
        </div>";

    }
function genererMDP($longueur = 8)
{

    // initialiser la variable $mdp
    $mdp = "";

    // Définir tout les caractères possibles dans le mot de passe,
    // Il est possible de rajouter des voyelles ou bien des caractères spéciaux
    $possible = "12346789abcdfghjkmnpqrtvwxyzABCDFGHJKLMNPQRTVWXYZ";

    // obtenir le nombre de caractères dans la chaîne précédente
    // cette valeur sera utilisé plus tard
    $longueurMax = strlen($possible);

    if ($longueur > $longueurMax) {
        $longueur = $longueurMax;
    }

    // initialiser le compteur
    $i = 0;

    // ajouter un caractère aléatoire à $mdp jusqu'à ce que $longueur soit atteint
    while ($i < $longueur) {
        // prendre un caractère aléatoire
        $caractere = substr($possible, mt_rand(0, $longueurMax - 1), 1);

        // vérifier si le caractère est déjà utilisé dans $mdp
        if (!strstr($mdp, $caractere)) {
            // Si non, ajouter le caractère à $mdp et augmenter le compteur
            $mdp .= $caractere;
            $i++;
        }
    }

    // retourner le résultat final

    return $mdp;
}


?>
