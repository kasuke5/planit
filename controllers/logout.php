<?php
/*
 * Name: Deconnexion
 */
$layout = 'default';

function index(){
	modTitle('Planit | Deconnexion');
	setAlert('Vous êtes bien déconnecté, redirection vers la page d\'accueil dans 5 secondes', 'danger');
	deco();
	render(); 
}