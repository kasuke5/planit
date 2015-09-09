      <!-- afarkas.github.io/webshim/demos/index.html q-->
        <script src="//cdn.jsdelivr.net/webshim/1.14.5/polyfiller.js"></script>
        <script>
            webshims.setOptions('forms-ext', {types: 'date'});
            webshims.polyfill('forms forms-ext');
        </script>
<form class="form-horizontal" name="rechercher" method="post">
  <fieldset>
    <legend>Ajouter un vol</legend>

      <div class="form-group">
        <label for="compagnie" class="col-sm-2 control-label">Compagnie aérienne :</label>
        <div class="col-sm-5">
        <select id="compagnie" name="compagnie" required value=""  class="form-control chosen-select">
          <option></option> 
        <?php foreach ($compagnies as $compagnie): ?>
          <option value="<?=$compagnie['ICAO']?>"><?=$compagnie['nom']?></option>
        <?php endforeach; ?>
        </select>
        </div>
      </div>
        <div class="form-group">
        <label for="provenance" class="col-sm-2 control-label">Provenance :</label>
        <div class="col-sm-5">
        <select id="provenance" name="provenance" required value=""  class="form-control chosen-select">
          <option></option> 
        <?php foreach ($villes as $ville): ?>
          <option value="<?=$ville['id']?>"><?=$ville['pays']. ' - '.$ville['ville']. ' - '. $ville['nom'].' - '.$ville['code_vol']?></option>
        <?php endforeach; ?>
        </select>            
        </div>
          </div>
      <div class="form-group">
        <label for="destination" class="col-sm-2 control-label">Destination :</label>
        <div class="col-sm-5">
        <select id="destination" name="destination" required value=""  class="form-control chosen-select">
          <option></option> 
        <?php foreach ($villes as $ville): ?>
          <option value="<?=$ville['id']?>"><?=$ville['pays']. ' - '.$ville['ville']. ' - '. $ville['nom'].' - '.$ville['code_vol']?></option>
        <?php endforeach; ?>
        </select>
        </div>
      </div>
      <div class="form-group">
        <label for="nb_passagers" class="col-sm-2 control-label">Nombre de passagers :</label>
        <div class="col-sm-5">
        <input type="number" name="nb_passagers" id="nb_passagers" required value="" class="form-control">
        </div>
      </div>
    <div class="form-group">
      <label for="heure_depart" class="col-lg-2 control-label">Heure de départ :</label>
       <div class="col-sm-5">
       <input type="time" name="heure_depart" id="heure_depart" required value="" placeholder="hh:mm" class="form-control"/>
        </div>
    </div>


    <div class="form-group">
      <label for="heure_arrivee" class="col-lg-2 control-label">Heure d'arrivée :</label>
       <div class="col-sm-5">
       <input type="time" name="heure_arrivee" id="heure_arrivee" required value="" placeholder="hh:mm" class="form-control"/>
        </div>
    </div>

          <div class="form-group">
            <label for="date_depart" class="col-sm-2 control-label">Date départ :</label>
            <div class="col-sm-5">
            <input type="date" id="date_depart" name="date_depart" required value="" placeholder="2015-01-10 ..."  class="form-control"/>
            </div>
          </div>
          <div class="form-group">
            <label for="date_arrivee" class="col-sm-2 control-label">Date d'arrivée :</label>
            <div class="col-sm-5">
            <input type="date" id="date_arrivee" name="date_arrivee" required value="" placeholder="2015-01-10 ..."  class="form-control"/>
            </div>
          </div>
          </fieldset>
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Annuler</button>
        <button type="submit" class="btn btn-primary">Envoyer</button>
      </div>
    </div>
		</form>
		<script>
      $(".chosen-select").chosen();
    </script>