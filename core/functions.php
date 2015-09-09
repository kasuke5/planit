<?php

/* Fonction pour modifier le title */
function modTitle($s = 'Planit'){
	global $title;
	$title = $s;
}

//Trus si user connecte
function isCo(){
	if (isset($_SESSION['pseudo']))
		return true;
	return false;
}

function deco(){
	unset($_SESSION['pseudo']);
}
/* Alert functions */
function setAlert($message, $type){
	if (is_string($message) && in_array($type, ['success', 'info', 'warning', 'danger']))
		$_SESSION['alert'][$type][] = htmlentities($message);
}

function getAlert($type = 'all'){
	if ($type != 'all' && in_array($type, ['success', 'info', 'warning', 'danger'])){
		$ret = '<div class="alert alert-'.$type.' role="alert" >';
		foreach ($_SESSION['alert'][$type] as $alert)
			$ret .= '<p>'.$alert.'</p>';
		$ret .= '</div>';
	}
	else {
		$ret = '';
		foreach ($_SESSION['alert'] as $type => $alerts){
			$ret .= '<div class="alert alert-'.$type.' role="alert" >';
			foreach ($alerts as $alert)
				$ret .= '<p>'.$alert.'</p>';
			$ret .= '</div>';
		}
	}
	echo $ret;
}

/* Redirect */
function redirect($location = WEBROOT){
	Header('Location:'.$location);
	exit;
}

/*/Redirection avec tps
	function redirectime($location = WEBROOT, $time){
		header("Refresh: $time;URL=$location");
		exit;
	}*/
?>