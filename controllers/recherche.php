<?php
/*
 * Name: recheche
 */
$layout = 'default';

function index(){
	modTitle('Planit | Recheche');
	if (!isCO()) {
		setAlert('Veuillez vous connecter pour faire une recherche', 'warning');
	}
	loadModel('villes');
	$k['villes'] = getAllVille();
	set($k);
	if (!empty($_POST)){
		$ok = 0;
		foreach ($_POST as $post){
			if (!empty($post)){
				$ok = 1;
				break;
			}
		}
		
		if ($ok)
		{
			loadModel('recherche');
			$v['result'] = search_result($_POST);

			if (empty($v['result']))
				setAlert('Aucun resultat trouve', 'warning');
			set($v);
		}
		else
			setAlert('Remplir au moins un champs', 'danger');
	}

	render();
}

?>