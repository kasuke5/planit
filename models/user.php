<?php

function user_exist($pseudo, $password = ''){ 
	$password = md5($password);
	$req = "SELECT COUNT(*) FROM utilisateurs WHERE pseudo='$pseudo'";
	if (!empty($password))
		$req .= " AND mdp='$password'";
	$db = coBDD();
	$ret = $db->query($req)->fetchColumn();
	killBDD($db);
	return ($ret); 		
}

function mail_exist($mail){
	$req = "SELECT COUNT(*) FROM utilisateurs WHERE mail='$mail'";
	$db = coBDD();
	$ret = $db->query($req)->fetchColumn();
	killBDD($db);
	return ($ret);
}

function add_user($sexe, $nom, $prenom, $pseudo, $mail, $mdp, $date_naissance) {
	//$req = "INSERT INTO utilisateurs VALUES :sexe, :nom, :prenom, :pseudo, :mdp, :mail";
	$db = coBDD();
	$query = $db->prepare('INSERT INTO utilisateurs VALUES (NULL, :nom, :prenom, :sexe, :pseudo, :mail, :mdp, :date_naissance, 3)');
	$query->bindValue(':sexe', $sexe);
	$query->bindValue(':nom', $nom);
	$query->bindValue(':prenom', $prenom);
	$query->bindValue(':pseudo', $pseudo);
	$query->bindValue(':mdp', $mdp);
	$query->bindValue(':mail', $mail);
	$query->bindValue(':date_naissance', $date_naissance);

	if ($query->execute())
		return (1);
	return (0);
}