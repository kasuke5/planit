<?php
/*
 * Name: Add vol
 */
$layout = 'default';

function index(){

	modTitle('Planit | Ajouter vol');
	if (!isCo())
		redirect('user/connexion');
	if (!empty($_POST)){
		$ok = 1;
		foreach ($_POST as $k => $v){
			if (empty($v)){
				setAlert('Merci de remplir tous le champs', 'danger');
				$ok = 0;
				break;
			}
			$_POST[$k] = htmlentities($v);
		}
		if ($ok){
			extract($_POST);

			//verif compagnie 
			if (empty($compagnie)){
				setAlert('Veuillez choisir une compagnie', 'danger');
				$ok = 0;
			}
			else {
				$num_vols = $compagnie.rand(100, 9999);
			}

			/* Verification provenance */
			if (empty($provenance)){
				setAlert('Remplir la provenance', 'danger');
				$ok = 0;
			}
			if ($provenance == $destination){
				setAlert('Faites attention, vous avez les même destination/provenance', 'danger');
				$ok = 0;
			}

			//destination
			if (empty($destination)){
				setAlert('Remplir la destination', 'danger');
				$ok = 0;
			}

			//Verif passager
			if ($nb_passagers <= 1){
				setAlert('Veuillez modifier le nombre de passagers', 'danger');
				$ok = 0;
			}

			/* Verif heure depart/arrivee */
			if (empty($heure_depart)){
				setAlert('Selectionnez une heure', 'danger');
				$ok = 0;
			} 
			//check les heures qu'elles soient pas pareil ou wtf || HOUR($heure_depart) >= HOUR($heure_arrivee un truc ds le genre
			if (empty($heure_arrivee)) {
				setAlert('Pas bon l\'heure', 'danger');
				$ok = 0;
			}
			//verification de la date
            if (empty($date_depart)) {
                setAlert('Selectionnez une date', 'danger');
                $ok = 0;
            }
            //pareil check la date || $date_depart >= $date_arrivee)
            
            if ($date_arrivee < $date_depart){
                setAlert('Pas bon la date', 'danger');
                $ok = 0;
            }

			if ($ok){
				loadModel('ajouter_vol');
				//Relation sql
				if (!add_vol($num_vols, $nb_passagers, $heure_depart, $heure_arrivee, $date_depart, $date_arrivee, $provenance, $destination)){
                    setAlert('Erreur', 'danger');
				}
				else {
					setAlert('Vol bien ajouté', 'success');
				}
			}

		}
	}
	loadModel('compagnies');
	loadModel('villes');
	$q['villes'] = getAllVille();
	$q['compagnies'] = getAllCompagnies();
	
	set($q);
	render();
}

	//fonction qui genere le code du vol en fonction des infos
	function numero_vol($ICAO){

		return $ICAO.rand(100,9999);

	}
?>