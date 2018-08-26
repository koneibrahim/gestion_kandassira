<?php
	 		/* -----Debut Liste.php----------- */
	include'../../Layout/header.php';
	include'../../Layout/header2.php';
	include'../../Layout/retour.php';

	  echo '<div id="menu2">';
					//echo ' <a href="/Src/Reservations/liste.php"><button class="bm2">Reservations</button> </a>';
					//echo ' <a href="/Src/Seminaires/liste.php"> <button class="bm2">Seminaires</button> </a>';
					echo ' <a href="/Src/Clients/liste.php"> <button class="bm2">Clients</button> </a>';
					echo ' <a href="/Src/Mariages/liste.php"> <button class="bm2">Mariages</button> </a>';
					echo ' <a href="/Src/Fournisseurs/liste.php"> <button class="bm2">fournisseurs</button> </a>';
					echo ' <a href="/Src/Personnels/liste.php"> <button class="bm2">Personnels</button> </a>';

		echo '</div>';

	include'CRUD.php';
	echo'<div id="content">';

	echo'<h3 class="titrecform textgau">Liste des peoples</h3><br/>';
	echo '<table cellpadding="3" border="0" class="w90">';
	echo '<tr class="thajouter">';
	echo '<th colspan="12" class="textdro thtable"><a href="Fajouter.php">
	<img src="/Images/ajouter.png" width="25px"height="25px" class="img" title="Ajouter"></a></th>';
	echo '</tr>';
	echo '<tr class="cth">';
	echo	'<th class="thtable textcen">N°</th>';
	echo	'<th class="thtable textgau">Nom </th>';
	echo	'<th class="thtable textgau">Prénom </th>';
	echo	'<th class="thtable textcen">Téléphone 1</th>';
	echo	'<th class="thtable textcen">Téléphone 2</th>';
	echo	'<th class="thtable textcen">Addresse </th>';
	echo	'<th class="thtable textcen">Type </th>';
	echo	'<th colspan="2" class="thtable">Action</th>';
	echo'</tr>';
	$i=1;
	while($ligne=pg_fetch_assoc($personneperso))
	{
	echo'<tr class="ld'.($i%2).'">';
  echo'<td class="textcen">'.$i.'</td>';
	echo'<td class="textgau">'.$ligne['nom'].'</td>';
	echo'<td class="textgau">'.$ligne['prenom'].'</td>';
	echo'<td class="textcen">'.$ligne['tel'].'<sup></sup></td>';
	echo'<td class="textcen">'.$ligne['tel2'].'<sup></sup></td>';
	echo'<td class="textcen">'.$ligne['adresse'].'</td>';
	echo'<td class="textcen">'.$ligne['nom_cat'].'<sup></sup></td>';
	echo'<td class="textcen"><a href="Fmodifier.php?id_p='.$ligne['id_p'].
			'&nom_p='.$ligne['nom_p'].
			'&prenom_p='.$ligne['prenom_p'].
			'&fonction='.$ligne['fonction'].
			'&tel='.$ligne['tel'].
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
	/*	echo'<td class="textcen"><a href="yogotterahma/Src/html2pdf_v4.03/examples/exemple04.php"><button> helo</button></a>';*/

	echo'</table>';
	echo'</div>';
	include'../../Layout/footer.php';

		/* -------Fin  liste.php------------- */
?>
