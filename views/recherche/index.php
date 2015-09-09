<?php if (isCO()): ?>
      <!-- afarkas.github.io/webshim/demos/index.html q-->
        <script src="//cdn.jsdelivr.net/webshim/1.14.5/polyfiller.js"></script>
        <script>
            webshims.setOptions('forms-ext', {types: 'date'});
            webshims.polyfill('forms forms-ext');
        </script>

<form class="form-horizontal" name="rechercher" method="post">
  <fieldset>
    <legend>Faire une recherche</legend>
      <div class="form-group">
        <label for="num_vols" class="col-sm-2 control-label">N° de vol :</label>
        <div class="col-sm-5">
        <input type="text" id="num_vols" name="num_vols" value="" placeholder="N° de vol ..."  class="form-control"/>
        </div>
      </div>
        <div class="form-group">
        <label for="provenance" class="col-sm-2 control-label">Provenance :</label>
        <div class="col-sm-5">
        <select id="provenance" name="provenance" value=""  class="form-control chosen-select">
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
        <select id="destination" name="destination" value=""  class="form-control chosen-select">
          <option></option> 
        <?php foreach ($villes as $ville): ?>
          <option value="<?=$ville['id']?>"><?=$ville['pays']. ' - '.$ville['ville']. ' - '. $ville['nom'].' - '.$ville['code_vol']?></option>
        <?php endforeach; ?>
        </select>
        </div>
      </div>

    <div class="form-group">
      <label for="heure_depart" class="col-lg-2 control-label">Heure de départ :</label>
       <div class="col-sm-5">
       <input type="time" name="heure_depart" id="heure_depart" value="" placeholder="hh:mm" class="form-control"/>
        </div>
    </div>


    <div class="form-group">
      <label for="heure_arrivee" class="col-lg-2 control-label">Heure d'arrivée :</label>
       <div class="col-sm-5">
       <input type="time" name="heure_arrivee" id="heure_arrivee" value="" placeholder="hh:mm" class="form-control"/>
        </div>
    </div>

          <div class="form-group">
            <label for="date_depart" class="col-sm-2 control-label">Date départ :</label>
            <div class="col-sm-5">
            <input type="date" id="date_depart" name="date_depart" value="" placeholder="2015-01-10 ..."  class="form-control"/>
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
    <?php if (!empty($result)): ?>
			<table class="table table-striped table-hover ">
				  <thead>
				    <tr>
						<th> N° Vols </th>
						<th> Nb Passagers </th>
						<th> Départ </th>
						<th> Arrivée </th>
            <th>Aeroport de provenance</th>
            <th>Aeroport d'arrivée</th>
						<th>Ville - Pays de Provenance</th>
						<th>Ville - Pays de Destination</th>

				    </tr>
				  </thead>
          <tbody>
          <?php $i=0; ?>
            <?php foreach($result as  $k => $v): ?>
              <tr>
                <?php extract($v); ?>
                <td><?= $num_vols ?></td>
                <td><?= $nb_passagers ?></td>
                <td><?= $date_depart.' - '.$heure_depart ?></td>
                <td><?= $date_arrivee.' - '.$heure_arrivee ?></td>
                <td><?= $prov_nom ?></td>
                <td><?= $dest_nom ?></td>
                <td><?= $prov_ville.' - '.$prov_pays ?></td>
                <td><?= $dest_ville.' - '.$dest_pays ?></td>
              </tr>
          <?php endforeach; ?>
	     </table>
    <?php endif; ?>
<?php endif?>

    <script>
      $(".chosen-select").chosen();
    </script>