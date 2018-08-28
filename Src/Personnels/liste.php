<?php
	 		/* -----Debut Liste.php----------- */
	include'../../Layout/header.php';
	include'../../Layout/header2.php';
	include'../../Layout/retour.php';

	  echo '<div id="menu2">';

		echo '</div>';

	include'CRUD.php';
	echo'<div id="content">';
				echo'<h3 class="titrecform textgau">Liste des personnels</h3><br/>';
				echo'<table cellpadding="3" border="0" class="w90">';
							echo'<tr class="thajouter">';
							//echo'<th colspan="8" class="textdro thtable"><a href="lajouter.php">
							//<img src="/Images/ajouter.png" width="25px"height="25px" class="img" title="Ajouter"></a></th>';
							echo'</tr>';
							echo'<tr class="cth">';
							echo	'<th class="thtable textcen">N°</th>';
							echo	'<th class="thtable textgau">Nom </th>';
							echo	'<th class="thtable textgau">Prénom </th>';
							echo	'<th class="thtable textcen">Poste </th>';
							echo	'<th class="thtable textcen">Téléphone 1</th>';
							echo	'<th class="thtable textcen">Téléphone 2</th>';
							echo	'<th class="thtable textcen">Addresse </th>';
							echo'</tr>';
							$i=1;
							while($ligne=pg_fetch_assoc($personneperso))
							{
							echo'<tr class="ld'.($i%2).'">';
						  echo'<td class="textcen">'.$i.'</td>';
							echo'<td class="textgau">'.$ligne['nom'].'</td>';
							echo'<td class="textgau">'.$ligne['prenom'].'</td>';
							echo'<td class="textgau">'.$ligne['poste'].'</td>';
							echo'<td class="textcen">'.$ligne['tel'].'<sup></sup></td>';
							echo'<td class="textcen">'.$ligne['tel2'].'<sup></sup></td>';
							echo'<td class="textcen">'.$ligne['adresse'].'</td>';
							/*
							echo'<td class="textcen"><a href="lmodifier.php?id_cli='.$ligne['id_cli'].
									'&nom_cli='.$ligne['nom_cli'].
									'&pre_cli='.$ligne['pre_cli'].
									'&tel='.$ligne['tel'].
									'&tel2='.$ligne['tel2'].
									'&adresse_cli='.$ligne['adresse_cli'].
									'"><img src="/Images/modifier.png" width="25px"height="25px" class="img" title="Modifier"></a></td>';
							echo'<td class="textcen"><a href="lsupprimer.php?id_cli='.$ligne['id_cli'].
									'&nom_cli='.$ligne['nom_cli'].
									'&pre_cli='.$ligne['pre_cli'].
									'&tel='.$ligne['tel'].
									'&tel2='.$ligne['tel2'].
									'&adresse_cli='.$ligne['adresse_cli'].
									'"><img src="/Images/supprimer.png" width="25px"height="25px" class="img" title="Supprimer"></a></td>';
									*/
							echo'</tr>';
							$i++;
							}
				echo'</table>';
	echo'</div>';
	include'../../Layout/footer.php';

		/* -------Fin  liste.php------------- */
?>
