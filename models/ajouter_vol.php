<?php
//trouver le ICAO de la compagnie
function add_vol($num_vols, $nb_passagers, $heure_depart, $heure_arrivee, $date_depart, $date_arrivee, $provenance, $destination) {
	//$req = "INSERT INTO utilisateurs VALUES :sexe, :nom, :prenom, :pseudo, :mdp, :mail";
	$db = coBDD();
	$query = $db->prepare('INSERT INTO vols VALUES (NULL, :num_vols, :nb_passagers, :heure_depart, :heure_arrivee, :date_depart, :date_arrivee, :provenance, :destination)');
	$query->bindValue(':num_vols', $num_vols);
	$query->bindValue(':nb_passagers', $nb_passagers);
	$query->bindValue(':heure_depart', $heure_depart);
	$query->bindValue(':heure_arrivee', $heure_arrivee);
	$query->bindValue(':date_depart', $date_depart);
	$query->bindValue(':date_arrivee', $date_arrivee);
	$query->bindValue(':provenance', $provenance);
	$query->bindValue(':destination', $destination);

	if ($query->execute())
		return (1);
	return (0);
}

function getAllVol(){
	$db = coBDD();
	$req = $db->query("SELECT * FROM vols");
	return $req->fetchAll(PDO::FETCH_ASSOC);

}
?>
