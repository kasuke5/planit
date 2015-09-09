<table class="table table-striped table-hover ">
				  <thead>
				    <tr>
						<th> # </th>
						<th> Numéro de vol </th>
						<th> Nombre de passagers </th>
						<th> Date - Heure de départ </th> 
						<th> Date - Heure d'arrivée </th>
						<th> Provenance </th>
						<th> Destination </th>
				    </tr>
				  </thead>

				  <tbody>
				    <?php foreach($vols as  $k => $v): ?>
				    	<tr>
							<?php extract($v); ?>
							<td><?= $id ?></td>
							<td><?= $num_vols ?></td>
							<td><?= $nb_passagers ?></td>
							<td><?= $date_depart.' - '.$heure_depart?></td>
							<td><?= $date_arrivee.' - '.$heure_arrivee ?></td>
							<td><?= $provenance ?></td>
							<td><?= $destination ?></td>
				    	</tr>
					<?php endforeach; ?>
				   </tbody>
	</table>