<?php

require_once('connexion_sql.php');

if (isset($_SESSION['pseudo'])) {
$reponse = $db->query("SELECT * FROM utilisateurs WHERE id_droit='3'");
?>
<table class="table table-striped table-hover ">
    <thead>
    <tr>
        <th> id</th>
        <th> Nom</th>
        <th> Prénom</th>
        <th> Sexe</th>
        <th> Pseudo</th>
        <th> Mail</th>
        <th> Mot de passe</th>
        <th> Date Naissance</th>
        <th> Id droit</th>
    </tr>
    </thead>
    <tbody>
    <?php
    while ($donnees = $reponse->fetch()) {
    ?>
    <tr>
        <td><?php echo $donnees['id']; ?></td>
        <td><?php echo $donnees['nom']; ?></td>
        <td><?php echo $donnees['prenom']; ?></td>
        <td><?php echo $donnees['sexe']; ?></td>
        <td><?php echo $donnees['pseudo']; ?></td>
        <td><?php echo $donnees['mail']; ?></td>
        <td><?php echo $donnees['mdp']; ?></td>
        <td><?php echo $donnees['date_naissance']; ?></td>
        <td><?php echo $donnees['id_droit']; ?></td>

        <td>
            <form action="" method="post">
                <input type="hidden" name="id_modifier" value="<?php echo $donnees['id'] ?>">
                <!--<input type="hidden" name="id_droit" value="<?php echo $donnees['id_droit'] ?>">-->
                <input type="submit" name="modifier" value="Modifier" class="btn btn-primary btn-sm">
            </form>
        </td>


        <td>
            <form action="" method="post">
                <input type="hidden" name="id" value="<?php echo $donnees['id'] ?>">
                <input type="submit" name="supprimer" value="Supprimer" class="btn btn-danger btn-sm">
            </form>
        </td>


        <?php
        //}

        //}

        ?>
        <?php


        }
        if (isset($_POST['supprimer'])) {
            $id = $_POST['id'];
            $delete = $db->prepare("delete from utilisateurs where id=$id");
            $delete->execute();
            header('Location: aff_utilisateurs');

        } else if (isset($_POST['modifier'])) {

            $id_modifier = htmlspecialchars($_POST['id_modifier']);
            $select = $db->prepare("select * from utilisateurs WHERE id='$id_modifier'");
            echo "$id_modifier";
            ?>
            <div class="panel panel-primary" style="text-align: center">
                <div class="panel-heading">
                    <h3 class="panel-title">Modifier</h3>
                </div>
                <div class="panel-body">
                </div>
                <form method="post" action="">

                    <select name="id_droit" size="1" required="required">
                        <option value="1">Commandant</option>
                        <option value="2">Interne</option>
                    </select>
                    <input type="submit" name="valider" class="btn btn-primary btn-xs">

                </form>
            </div>


            <?php

            if (isset($_POST['valider'])) {
                echo "test";
                $id_droit = $_POST['id_modifier'];
                $update = $db->prepare("update utilisateurs set id_droit='$id_droit'");
                $update->execute();
                header('Location: admin.php?action=modifyanddelete');
            }


        }

        }
        ?>
    </tr>
</table>
