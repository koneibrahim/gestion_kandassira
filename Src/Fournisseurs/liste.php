<?php
	 		/* -----Debut Liste.php----------- */
	include'../../Layout/header.php';
	include'../../Layout/header2.php';
	include'../../Layout/retour.php';

	  echo '<div id="menu2">';
				echo ' <a href="/Src/Reservations/liste.php"><button class="bm2">Reservations</button> </a>';
				echo ' <a href="/Src/Mariages/liste.php"> <button class="bm2">Kodumani</button> </a>';
				echo ' <a href="/Src/Prestations/liste.php"> <button class="bm2">Prestations</button> </a>';
		echo '</div>';

	include'CRUD.php';
	echo'<div id="content">';

	echo'<h3 class="titrecform textgau">Liste des fournisseurs</h3><br/>';
	echo '<table cellpadding="3" border="0" class="w90">';
	echo '<tr class="thajouter">';
	echo	'<th colspan="6" class="textdro thtable"><a href="Fajouter.php">
	<img src="/Images/ajouter.png" width="25px"height="25px" class="img" title="Ajouter"></a></th>';
	echo '</tr>';
	echo '<tr class="cth">';
	echo	'<th class="thtable textcen">N°</th>';
	echo	'<th class="thtable textgau">Nom fournisseur</th>';
	echo	'<th class="thtable textcen">Téléphone </th>';
	echo	'<th class="thtable textcen">Addresse </th>';
	echo	'<th colspan="2" class="thtable">Action</th>';
	echo'</tr>';
	$i=1;
	while($ligne=pg_fetch_assoc($resultat))
	{
	echo'<tr class="ld'.($i%2).'">';
   echo'<td class="textcen">'.$i.'</td>';
	echo'<td class="textgau">'.$ligne['nom_fo'].'</td>';
	echo '<td class="textcen ">'.$ligne['telephone'].'<sup></sup></td>';
	echo'<td class="textcen">'.$ligne['addresse'].'</td>';
	echo'<td class="textcen"><a href="Fmodifier.php?id_fo='.$ligne['id_fo'].
			'&nom_fo='.$ligne['nom_fo'].
			'&telephone='.$ligne['telephone'].
			'&addresse='.$ligne['addresse'].
			'"><img src="/Images/modifier.png" width="25px"height="25px" class="img" title="Modifier"></a></td>';
	echo'<td class="textcen"><a href="Fsupprimer.php?id_fo='.$ligne['id_fo'].
			'&nom_fo='.$ligne['nom_fo'].
			'&telephone='.$ligne['telephone'].
			'&addresse='.$ligne['addresse'].
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
