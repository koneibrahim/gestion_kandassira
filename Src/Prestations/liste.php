<?php
	 		/* -----Debut Liste.php----------- */
	include'../../Layout/header.php';
	include'../../Layout/header2.php';
	include'../../Layout/retour.php';

	  echo '<div id="menu2">';
		echo '</div>';

	include'CRUD.php';
	echo'<div id="content">';

	echo'<h3 class="titrecform textgau">Liste des prestations</h3><br/>';
	echo '<table cellpadding="3" border="0" class="w90">';
	echo '<tr class="thajouter">';
	echo '<th colspan="8" class="textdro thtable"><a href="Fajouter.php">
	<img src="/Images/ajouter.png" width="25px"height="25px" class="img" title="Ajouter"></a></th>';
	echo '</tr>';
	echo '<tr class="cth">';
	echo	'<th class="thtable textcen">N°</th>';
	echo	'<th class="thtable textgau">Nom </th>';
	echo	'<th class="thtable textgau">Prix </th>';
	echo	'<th colspan="2" class="thtable">Action</th>';
	echo'</tr>';
	$i=1;
	while($ligne=pg_fetch_assoc($resultat))
	{
	echo'<tr class="ld'.($i%2).'">';
  echo'<td class="textcen">'.$i.'</td>';
	echo'<td class="textgau">'.$ligne['nom_pres'].'</td>';
	echo'<td class="textgau">'.$ligne['prix'].'</td>';
	echo'<td class="textcen"><a href="Fmodifier.php?id_pres='.$ligne['id_pres'].
			'&nom_pres='.$ligne['nom_pres'].
			'&prix='.$ligne['prix'].
			'"><img src="/Images/modifier.png" width="25px"height="25px" class="img" title="Modifier"></a></td>';
	echo'<td class="textcen"><a href="Fsupprimer.php?id_pres='.$ligne['id_pres'].
			'&nom_pres='.$ligne['nom_pres'].
			'&prix='.$ligne['prix'].
			'"><img src="/Images/supprimer.png" width="25px"height="25px" class="img" title="Supprimer"></a></td>';
	echo'</tr>';
	$i++;
	}

	echo'</table>';
	echo'</div>';
	include'../../Layout/footer.php';

		/* -------Fin  liste.php------------- */
?>
