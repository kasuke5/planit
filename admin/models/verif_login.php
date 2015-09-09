<?php

require_once('connexion_sql.php');


if (isset($_POST['connect'])) {

    $pseudo = $_POST["pseudo"];
    $password = $_POST["password"];

    if ($pseudo && $password) {

        $result = $db->prepare(" SELECT COUNT(*) FROM utilisateurs WHERE pseudo = '$pseudo' AND mdp = '$password' or id_droit='2'");
        $result->execute();
        $num_rows = $result->fetchColumn();


        if ($num_rows == 1) {
            // Redirection réussite
            $_SESSION['pseudo'] = $pseudo;
            header("Location: aff_utilisateurs");

        } else echo "
            <div class='alert alert-dismissible alert-danger'>
                <button type='button' class='close' data-dismiss='alert'>×</button>
                <strong>Nom d'utilisateur</strong> ou <strong>mot de passe incorrect</strong>
            </div>";
    }else echo"
    <div class='alert alert-dismissible alert-danger'>
        <button type='button' class='close' data-dismiss='alert'>×</button>
        Veuillez remplir <strong>tous les champs</strong>
    </div>";


}
?>
