<?php
	 		/* -----Debut Liste.php----------- */
	include'../../Layout/header.php';
	include'../../Layout/header2.php';
	include'../../Layout/retour.php';

	  echo '<div id="menu2">';

		echo '</div>';

	include'CRUD.php';
	echo'<div id="content">';
				echo'<h3 class="titrecform textgau">Liste des fournisseurs</h3><br/>';
				echo'<table cellpadding="3" border="0" class="w90">';
							echo'<tr class="thajouter">';
						//	echo'<th colspan="8" class="textdro thtable"><a href="lajouter.php">
							//<img src="/Images/ajouter.png" width="25px"height="25px" class="img" title="Ajouter"></a></th>';
							echo'</tr>';
							echo'<tr class="cth">';
							echo	'<th class="thtable textcen">N°</th>';
							echo	'<th class="thtable textgau">Nom </th>';
							echo	'<th class="thtable textgau">Prénom </th>';
							echo	'<th class="thtable textcen">Téléphone 1</th>';
							echo	'<th class="thtable textcen">Téléphone 2</th>';
							echo	'<th class="thtable textcen">Addresse </th>';
							echo'</tr>';
							$i=1;
							while($ligne=pg_fetch_assoc($lfournisseur))
							{
							echo'<tr class="ld'.($i%2).'">';
						  echo'<td class="textcen">'.$i.'</td>';
							echo'<td class="textgau">'.$ligne['nom'].'</td>';
							echo'<td class="textgau">'.$ligne['prenom'].'</td>';
							echo'<td class="textcen">'.$ligne['tel'].'<sup></sup></td>';
							echo'<td class="textcen">'.$ligne['tel2'].'<sup></sup></td>';
							echo'<td class="textcen">'.$ligne['adresse'].'</td>';
							echo'</tr>';
							$i++;
							}
				echo'</table>';
	echo'</div>';
	include'../../Layout/footer.php';

		/* -------Fin  liste.php------------- */
?>
