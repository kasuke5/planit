<?php
/*
 * Name: gestion des vols
 */
$layout = 'default';

function index(){

	modTitle('Planit | Gérer les vols');
	loadModel('ajouter_vol');
	$v['vols'] = getAllVol();
	
	set($v);
	render(); 
}
?>