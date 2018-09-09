<?php
	 		/* -----Debut Liste.php----------- */
	include'../../Layout/header.php';
	include'../../Layout/header2.php';
	include'../../Layout/retour.php';

	echo '<div id="logo">';
	echo '</div>';

	  echo '<div id="menu2">';

		echo '</div>';

	include'CRUD.php';
	echo'<body>';
	echo'<div id="content">';
		echo'<div class="contenair">';
		echo'<div class="row">';
		echo'<div class="col-lg-10">';

				echo'<h3 class="titrecform textgau">Liste des telimani </h3><br/>';
				echo '<table class="table table-condensed">';
						echo '<tr class="thajouter">';
						echo '<th colspan="12" class="textdro thtable"><a href="Fajouter.php">
						<img src="/Images/ajouter.png" width="25px"height="25px" class="img" title="Ajouter"></a></th>';
						echo '</tr>';
						echo'<thead>';
								echo'<tr class="cth">';
								echo'<th class="thtable textcen">N°</th>';
								echo'<th class="thtable textgau">Nom </th>';
								echo'<th class="thtable textgau">Prénom </th>';
								echo'<th class="thtable textcen">Téléphone </th>';
								echo'<th colspan="2" class="thtable">Action</th>';
								echo'</tr>';
								$i=1;
								while($ligne=pg_fetch_assoc($ltelimani))
								{
								echo'<tr class="ld'.($i%2).'">';
							  echo'<td class="textcen">'.$i.'</td>';
								echo'<td class="textgau">'.$ligne['nom_t'].'</td>';
								echo'<td class="textgau">'.$ligne['prenom_t'].'</td>';
								echo'<td class="textcen">'.$ligne['tel'].'<sup></sup></td>';
								echo'<td class="textcen"><a href="Fmodifier.php?id_po='.$ligne['id_po'].
										'&nom='.$ligne['nom'].
										'&prenom='.$ligne['prenom'].
										'&id_cat='.$ligne['id_cat'].
										'&tel='.$ligne['tel'].
										'&tel2='.$ligne['tel2'].
										'&nom_f='.$ligne['nom_f'].
										'&prenom_f='.$ligne['prenom_f'].
										'&adresse='.$ligne['adresse'].
										'"><img src="/Images/modifier.png" width="25px"height="25px" class="img" title="Modifier"></a></td>';
								echo'<td class="textcen"><a href="Fsupprimer.php?id_po='.$ligne['id_po'].
										'&nom='.$ligne['nom'].
										'&prenom='.$ligne['prenom'].
										'&poste='.$ligne['poste'].
										'&tel='.$ligne['tel'].
										'&adresse='.$ligne['adresse'].
										'"><img src="/Images/supprimer.png" width="25px"height="25px" class="img" title="Supprimer"></a></td>';
								echo'</tr>';
								$i++;
								}
						echo'</thead>';
				echo'</table>';
			echo'</div>';
			echo'</div>';

	echo'</body>';

	include'../../Layout/footer.php';
		/* -------Fin  liste.php------------- */
?>
