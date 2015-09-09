<?php
loadModel('verif_login');

if (isCO()) {
    echo "Bonjour " . $_SESSION['pseudo'];
}else echo"
	<div class='text-center'><strong>Accès Non Autorisé.</strong></div>
";
