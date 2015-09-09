
<form class="form-horizontal" action="" method="POST" id="form">
    <legend>Inscription</legend>
<div class="form-group">
   <label class="col-sm-3 control-label">Sexe :</label>
      <div class="col-sm-3">
        <div class="radio">
          <label>
            <input name="sexe" id="homme" value="homme" checked="" type="radio">
            Homme
          </label>


        </div>
        <div class="radio">
          <label>
      <input type="radio" name="sexe" value="femme" required/>
      Femme
          </label>
        </div>
      </div>
</div>

          <div class="form-group">
            <label for="nom" class="col-sm-3 control-label">Nom :</label>
            <div class="col-sm-5">
              <input type="text" id="nom" name="nom" value="" placeholder="Nom ..." required class="form-control"/>
               <span class="error" id="errornom"></span>
            </div>
          </div>
          <div class="form-group">
            <label for="prenom" class="col-sm-3 control-label">Prénom :</label>
            <div class="col-sm-5">
            <input type="text" id="prenom" name="prenom" value="" placeholder="Prenom ..." required class="form-control"/>
            <span class="error" id="errorprenom"></span>
            </div>
          </div>

          <div class="form-group">
            <label for="pseudo" class="col-sm-3 control-label">Pseudo :</label>
            <div class="col-sm-5">
            <input type="text" id="pseudo" name="pseudo" value="" placeholder="Pseudo ..." required class="form-control"/>
            <span class="error" id="errorpseudo"></span>
            </div>
          </div>

          <div class="form-group">
            <label for="mdp" class="col-sm-3 control-label">Mot de passe :</label>
            <div class="col-sm-5">
            <input type="password" id="mdp" name="mdp" value="" placeholder="Mot de passe ..." required class="form-control"/>
            <span class="error" id="errormdp"></span>
            </div>
          </div>
        <div class="form-group">
            <label for="mdp" class="col-sm-3 control-label">Confirmer le Mot de passe :</label>
            <div class="col-sm-5">
                <input type="password" id="cmdp" name="cmdp" value="" placeholder="Mot de passe ..." required class="form-control"/>
                <span class="error" id="errorcomfmdp">
            </div>
        </div>

          <div class="form-group">
            <label for="mail" class="col-sm-3 control-label">Mail :</label>
            <div class="col-sm-5">
            <input type="mail" id="mail" name="mail" value="" placeholder="Mail ..." required class="form-control"/>
            <span class="error" id="errormail"></span>
            </div>
          </div>

<div class="form-group">
      <label for="select" class="col-lg-3 control-label">Date de naissance</label>
      <div class="col-lg-1">
    <select name="jour" class="form-control" id ="select">

        <?php
        for ($i = 1; $i <= 31; $i++) {
            echo '<option value="' . $i . '">' . $i . '</option>';
        }
        ?>
    </select>
      </div>
      <div class="col-lg-2">
    <select name="mois" size="1" class="form-control">
        <option value="01">Janvier</option>
        <option value="02">Février</option>
        <option value="03">Mars</option>
        <option value="04">Avril</option>
        <option value="05">Mai</option>
        <option value="06">Juin</option>
        <option value="07">Juillet</option>
        <option value="08">Août</option>
        <option value="09">Septembre</option>
        <option value="10">Octobre</option>
        <option value="11">Novembre</option>
        <option value="12">Décembre</option>
    </select>
    </div>
    <div class="col-lg-2">
    <select name="annee" class="form-control">

        <?php
        for ($i = 2015; $i >= 1930; $i--) {
            echo '<option value="' . $i . '">' . $i . '</option>';
        }
        ?>
    </select>
      </div>
    </div>

    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" class="btn btn-primary">Envoyer</button>
      </div>
    </div>
    <script type="text/javascript" src="<?=WEBROOT?>public/js/verif_formulaire.js"></script>
</form>