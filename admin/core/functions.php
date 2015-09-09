<?php

/* Fonction pour modifier le title */
function modTitle($s = 'Planit'){
	global $title;
	$title = $s;

}

function isCO(){
    if(isset($_SESSION['pseudo'])){
        return true;
        return false;
    }

}

?>