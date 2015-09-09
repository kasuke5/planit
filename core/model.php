<?php

function coBDD(){
	try {
		$db = new PDO('mysql:host=localhost;dbname=planit', 'root', 'narutogamer', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
	}
	catch (Exception $e) {
	        print('Erreur : ' . $e->getMessage());
	}
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	return ($db);
}

function killBDD($db){
	$db = NULL;
}