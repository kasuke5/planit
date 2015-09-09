<?php
/*
 * Name: Inscription
 */
$layout = 'default';

function index(){
	modTitle('Planit | Inscription');
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
			loadModel('user');
			extract($_POST);
			/* Verification pseudo */
			if (!ctype_alnum($pseudo)){
				setAlert('Le pseudo doit etre alpha-numeric', 'danger');
				$ok = 0;
			}
			else if (user_exist($pseudo)){
				setAlert('Le pseudo est deja utilise', 'danger');
				$ok = 0;
			}

			//verif sexe 
			if (!in_array($sexe, ['homme', 'femme'])){
				setAlert('le sexe n\'est pas valide, tu as essayé d\'escroquer salopard', 'danger');
				$ok = 0;
			}

			/* Verification nom/prenom */
			if (empty($prenom) || empty($nom)) {
				setAlert('Le nom et le prénom doivent contenir des lettres', 'danger');
				$ok = 0;
			}

			//Verif date de naissance
			if (($jour == 1 && $mois == 01 && $annee == 2015) || !checkdate($mois, $jour, $annee) || (time() - mktime(0, 0, 0, $mois, $jour, $annee) < 0)){
				setAlert('Veuillez modifier la date de naissance', 'danger');
				$ok = 0;
			}

			/* Verif email */
			if (!filter_var($mail, FILTER_VALIDATE_EMAIL)){
				setAlert('Email non valide', 'danger');
				$ok = 0;
			} 
			else if (mail_exist($mail)) {
				setAlert('Adresse mail existe déjà', 'danger');
				$ok = 0;
			}
			//verification que les mots de passe correspondent
            if ($mdp !== $cmdp) {
                setAlert('Les mots de passe ne correspondent pas', 'danger');
                $ok = 0;
            }
            if ($mdp <= "4" && $cmdp <= "4") {
                setAlert('Le mot de passe doit faire 4 caractère minimum.', 'danger');
                $ok = 0;
            }

			if ($ok){
				//Requete sql
                $mdp = md5($mdp);
				if (!add_user($sexe, $nom, $prenom, $pseudo, $mail, $mdp, $annee.'-'.$mois.'-'.$jour)){
                    setAlert('Erreur', 'danger');
				}
				else {
					setAlert('Vous êtes bien inscrit.', 'success');
					$_SESSION['pseudo'] = $pseudo;
					header ('Refresh:5; url=home');
				}
			}

		}
	}

	render('inscription', 'user');
}

?>