<?php

function search_result($post){

	$req = "SELECT vols.*, dest.nom as dest_nom, dest.ville as dest_ville, dest.pays as dest_pays, prov.nom as prov_nom, prov.ville as prov_ville, prov.pays as prov_pays
			FROM vols 
			LEFT JOIN aeroports dest on dest.id_aeroport = vols.destination 
			LEFT JOIN aeroports prov on prov.id_aeroport = vols.provenance";

	$where = [];
	foreach ($post as $k => $v){
		if (!empty($v) && in_array($k, ['num_vols', 'destination', 'provenance', 'heure_arrivee', 'heure_depart', 'date_arrivee'])){
			if ($k == 'heure_arrivee' || $k == 'heure_depart'){
				$heure = explode(":", $v)[0];
				$where[] = " HOUR(vols.$k) >= '$heure'";
			}
			else if ($k == 'date_arrivee' || $k == 'date_depart'){
				$where[] = "vols.$k >= '$v'";
			}
			else if ($k == 'destination')
				$where[] = "(dest.id_aeroport = '$v')";
			else if ($k == 'provenance')
				$where[] = "(prov.id_aeroport = '$v')";
			else
				$where[] = "vols.$k LIKE '$v%'";
		}
	}


	foreach ($where as $k => $w){
		if ($k === 0)
			$req .= " WHERE $w";
		else
			$req .= " AND $w";
	}


	$req .= " ORDER BY date_arrivee DESC";
 
	$db = coBDD();
	$req = $db->prepare($req);
	$req->execute();
	$ret = $req->fetchAll(PDO::FETCH_ASSOC);
	killBDD($db);
	return $ret;
}

?>
