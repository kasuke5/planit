<?php

// On écrase le tableau de session 
$_SESSION = array();

// On détruit la session 
session_destroy();

// On prévient l'utilisateur
header ("Refresh: 3;url=home");
?>
    <div class="alert alert-dismissible alert-danger">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>Vous êtes bien déconnecté, vous allez être redirigé dans queleque secondes vers l'accueil si ce n'est pas le cas cliquez <a href="home" >ici</a></strong>
    </div>
