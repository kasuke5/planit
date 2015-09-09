<?php
function show_test() {
	$db = coBDD();

	// Requete sql
	$requete = "SELECT * FROM aeroports";
	$query = $db->query($requete);
	$result = $query->fetchAll();
	$query->closeCursor();
	killBDD($db);
	return $result;
}

?>
