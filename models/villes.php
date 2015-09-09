<?php

function searchVilles($term){
	$db = coBDD();
	//die("SELECT id_compagnie as id, nom FROM compagnies WHERE nom LIKE '%$term%'");
	$req = $db->prepare("SELECT id_aeroport as id, ville, pays FROM aeroports WHERE ville LIKE :term");
	$req->bindValue(':term', '%'.$term.'%');
	$req->execute();
	return $req->fetchAll(PDO::FETCH_ASSOC);
}

function getAllVille(){
	$db = coBDD();
	$req = $db->query('SELECT id_aeroport as id, ville, nom, code_vol, pays FROM aeroports');
	return $req->fetchAll(PDO::FETCH_ASSOC);
}