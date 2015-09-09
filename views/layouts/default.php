<!DOCTYPE html>
<html>
	<head>
    <meta charset="UTF-8">

    <title><?= $title; ?></title>

    <link rel="stylesheet" type="text/css" href="<?=WEBROOT?>public/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?=WEBROOT?>public/css/chosen.min.css" />  
    <script type="text/javascript" src="<?=WEBROOT?>public/js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="<?=WEBROOT?>public/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?=WEBROOT?>public/js/chosen.jquery.min.js"></script>

	</head>
	<body>
		<!-- Header -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?=WEBROOT?>">Plan'IT</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="<?php if($page == 'home' || $page == 'user') echo'active';?>"><a href="<?=WEBROOT?>">Accueil</a></li>
        <li class="<?php if($page == 'recherche') echo'active';?>"><a href="<?=WEBROOT?>recherche">Rechercher un vol</a></li>
        <?php if (!isCo()) :?>
        <li class="<?php if($page == 'inscription') echo'active';?>"><a href="<?=WEBROOT?>inscription">Inscription</a></li>
        <?php endif; ?>
        <li class="<?php if($page == 'contacts') echo'active' ;?>"><a href="<?=WEBROOT?>contacts">Nous contacter</a></li>
        <li class="<?php if($page == 'apropos') echo'active';?>"><a href="<?=WEBROOT?>apropos">A propos du site</a></li>  
        <?php if (isCo()) :?>
        <li class="<?php if($page == 'deconnexion') echo'active';?>"><a href="<?=WEBROOT?>logout">Deconnexion</a></li>
      <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>
<div class="container"/>
	<body>
    <?= getAlert(); ?>
		<!-- Body  	-->
		<?= $content_for_layout; ?>
		<!-- Footer -->
	</body>
</div>
</html>