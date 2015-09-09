

<table class="table table-striped table-hover ">
				  <thead>
				    <tr>
						<th> id Aeroport </th>
						<th> Nom </th>
						<th> Ville </th>
						<th> Pays </th> 
						<th> Code vol </th>
						<th> ICAO </th>
						<th> UTC </th>
						<th> DST </th>
						<th> Timezone </th>
				    </tr>
				  </thead>

				  <tbody>
				    <?php foreach($aeroports as  $k => $v): ?>
				    	<tr>
							<?php extract($v); ?>
							<td><?= $id_aeroport ?></td>
							<td><?= $nom ?></td>
							<td><?= $ville ?></td>
							<td><?= $pays ?></td>
							<td><?= $code_vol ?></td>
							<td><?= $ICAO ?></td>
							<td><?= $UTC ?></td>
							<td><?= $DST ?></td>
							<td><?= $timezone ?></td>
				    	</tr>
					<?php endforeach; ?>
				   </tbody>
	</table>