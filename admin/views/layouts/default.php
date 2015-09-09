<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="<?=WEBROOT?>public/css/bootstrap.css" />
		<title><?= $title; ?></title>
		<meta charset="UTF-8">
	</head>

		<!-- Header -->
<nav class="navbar navbar-default">
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
          <?php if (!isCo()) :?>
          <?php endif; ?>
          <?php if (isCo()) :?>
              <li class="<?php if($page == 'aff_utilisateurs') echo'active';?>"><a href="aff_utilisateurs">Liste des utilisateurs</a></li>
              <li class="<?php if($page == 'ajout_vols') echo'active';?>"><a href="ajouter_vols">Ajouter un vol</a></li>
              <li class="<?php if($page == 'ajout_passagers') echo'active';?>"><a href="#">Ajouter un passagers</a></li>
              <li class="<?php if($page == 'deconnexion') echo'active';?>"><a href="logout">Deconnexion</a></li>
          <?php endif; ?>
      </ul>
    </div>
  </div>
</nav>
<div class="container"/>
	<body>
		<!-- Body  	-->
		<?= $content_for_layout; ?>
		<!-- Footer -->
	</body>
</div>
</html>