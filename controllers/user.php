<?php
/*
 * Name: Connexion
 */
$layout = 'default';

function index(){
	if (!isCo())
		redirect('user/connexion');

	modTitle('Planit | Profil de '.$_SESSION['pseudo']);
	$v['pseudo'] = $_SESSION['pseudo'];
	set($v);
	render();
}

function connexion(){


	if (isCo())
		redirect();

	modTitle('Planit | Connexion'); 
	
	if (!empty($_POST)){
		loadModel('user');
		if (empty($_POST['pseudo']) || empty($_POST['password'])) {
			setAlert('Merci de remplir tous les champs', 'danger');
		}
		else if (user_exist($_POST['pseudo'], $_POST['password'])){
			$_SESSION['pseudo'] = $_POST['pseudo'];
			redirect();
		}
		else {
			setAlert('Mot de passe ou pseudo incorrect', 'danger');
		}
	}
	render('connexion');
}


?>