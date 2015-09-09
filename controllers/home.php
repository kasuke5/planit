<?php
/*
 * Name: Home
 */
$layout = 'default';

function index(){

	modTitle('Planit | Home');
	if (!isCo())
		redirect('user/connexion');

	render();
}
?>