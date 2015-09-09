<?php

require_once('connexion_sql.php');

if (isset($_SESSION['pseudo'])) {
    var_dump($_GET['url']);
    print_r($_GET['url']);

    $reponse = $db->query("SELECT * FROM vols");


    ?>
    <table class="table table-striped table-hover ">
        <thead>
        <tr>
            <th> id</th>
            <th> N°Vol</th>
            <th> Nombre de Passagers</th>
            <th> Heure de Départ</th>
            <th> Heure D'arrivée</th>
            <th> Date Départ</th>
            <th> Date D'arrivée</th>
            <th> Provenance</th>
            <th> Destination</th>
        </tr>
        </thead>
        <tbody>
        <?php
        while ($donnees = $reponse->fetch()) {
        ?>
        <tr>
            <td><?php echo $donnees['ID']; ?></td>
            <td><?php echo $donnees['num_vols']; ?></td>
            <td><?php echo $donnees['nb_passagers']; ?></td>
            <td><?php echo $donnees['hr_depart']; ?></td>
            <td><?php echo $donnees['hr_arrivee']; ?></td>
            <td><?php echo $donnees['date_depart']; ?></td>
            <td><?php echo $donnees['date_arrivee']; ?></td>
            <td><?php echo $donnees['provenance']; ?></td>
            <td><?php echo $donnees['destination']; ?></td>
            <td><a href="?url=modify&amp;ID=<?php echo $donnees['ID']; ?>"><button type="submit" name="modifier" class="btn btn-primary btn-sm">Modifier</button></a></td>
            <td><a href="?url=delete&amp;ID=<?php echo $donnees['ID']; ?>" <button type="submit" name="supprimer" class="btn btn-danger btn-sm">Supprimer</button></a></td>

            <?php
            }
            ?>
        </tr>
    </table>
<?php

}