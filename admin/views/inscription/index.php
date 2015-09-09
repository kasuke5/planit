<?php
loadModel('inscription');
?>
<form class="form-horizontal" action="" method="POST" id="form">
    <legend>Inscription</legend>


          <div class="form-group">
            <label for="pseudo" class="col-sm-2 control-label">Pseudo :</label>
            <div class="col-sm-5">
            <input type="text" id="pseudo" name="pseudo" value="" placeholder="Pseudo ..." required class="form-control"/>
            <span class="error" id="errorpseudo"></span><span id="verif_pseudo"></span>
            </div>
          </div>

          <div class="form-group">
            <label for="mail" class="col-sm-2 control-label">Mot de passe :</label>
            <div class="col-sm-5">
            <input type="password" name="password" placeholder="Mot de passe" required class="form-control"/>
            </div>
          </div>

    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" name="submit" class="btn btn-primary">Envoyer</button>
      </div>
    </div>
    <script type="text/javascript" src="<?=WEBROOT?>public/js/jquery.js"></script>
    <script type="text/javascript" src="<?=WEBROOT?>public/js/verif_formulaire.js"></script>
</form>
