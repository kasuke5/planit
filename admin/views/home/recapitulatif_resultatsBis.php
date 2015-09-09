<html>
	<?php
		require_once('header.php');
		require("../modele/connexion_sqlbis.php");
	// ?>
	<h1>Résultats de votre recherche</h1><br/>

		<?php
			include ('../modele/fct_show_passager.php');
				$test = show_passager($_POST['nom_passager'],$_POST['prenom_passager']);	
				if(!empty($test)){
					echo "<table border= '1' cellspacing='0' cellpadding='7'>
							<tr>
								<th> Nom </th>
								<th> Prenom </th>
								<th> Date de naissance </th>
							</tr>
							<tr>";
					foreach($test as $key => $value){	
						foreach($value as $infos => $value){
							echo "<th>" . $value . "</th>";
						}
					echo "</tr>";
					}
					echo "</table>";
				}
				else {
					echo "rien trouvé !";
				}
		?>
	</br>
	<a href="./accueil_connectesBis.php">Modifier</a>
</html>