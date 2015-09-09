<?php

function searchCompagnies($term){
	$db = coBDD();
	//die("SELECT id_compagnie as id, nom FROM compagnies WHERE nom LIKE '%$term%'");
	$req = $db->prepare("SELECT id_compagnie as id, nom FROM compagnies WHERE nom LIKE :term");
	$req->bindValue(':term', '%'.$term.'%');
	$req->execute();
	return $req->fetchAll(PDO::FETCH_ASSOC);
}

function getAllCompagnies(){
	$db = coBDD();
	$req = $db->query('SELECT * FROM compagnies');
	return $req->fetchAll(PDO::FETCH_ASSOC);
}
