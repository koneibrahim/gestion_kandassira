<?php
	 		/* -----Debut Liste.php----------- */
	include'../../Layout/header.php';
	include'../../Layout/header2.php';
	include'../../Layout/retour.php';

	  echo '<div id="menu2">';
					echo ' <a href="/Src/Reservations/liste.php"><button class="bm2">Reservations</button> </a>';
					echo ' <a href="/Src/Mariages/liste.php"> <button class="bm2">Kodumani</button> </a>';
					echo ' <a href="/Src/Prestations/liste.php"> <button class="bm2">Prestations</button> </a>';
					echo ' <a href="/Src/Produits/liste.php"> <button class="bm2">Produits</button> </a>';
					echo ' <a href="/Src/Seminaires/liste.php"> <button class="bm2">Seminaires</button> </a>';
		echo '</div>';

	include'CRUD.php';
	echo'<div id="content">';

	echo'<h3 class="titrecform textgau">Liste des mariages</h3><br/>';
	echo '<table cellpadding="3" border="0" class="w90">';
	echo '<tr class="thajouter">';
	echo '<th colspan="12" class="textdro thtable"><a href="Fajouter.php">
	<img src="/Images/ajouter.png" width="25px"height="25px" class="img" title="Ajouter"></a></th>';

	echo '</tr>';
	echo '<tr class="cth">';
	echo	'<th class="thtable textcen">N°</th>';
	echo	'<th class="thtable textgau">Nom mari </th>';
	echo	'<th class="thtable textgau">Prénom mari</th>';
	echo	'<th class="thtable textcen">Contact </th>';
	echo	'<th class="thtable textgau">Nom mari(e)</th>';
	echo	'<th class="thtable textgau">Prénom mari(e)</th>';
	echo	'<th class="thtable textgau">Adresse</th>';
	echo	'<th colspan="2" class="thtable">Action</th>';
	echo'</tr>';
	$i=1;
	while($ligne=pg_fetch_assoc($resultat))
	{
	echo'<tr class="ld'.($i%2).'">';
  echo'<td class="textcen">'.$i.'</td>';
	echo'<td class="textgau">'.$ligne['nom_m'].'</td>';
	echo'<td class="textgau">'.$ligne['prenom_m'].'</td>';
	echo'<td class="textgau">'.$ligne['contact'].'</td>';
	echo'<td class="textgau">'.$ligne['nom_f'].'</td>';
	echo'<td class="textgau">'.$ligne['prenom_f'].'</td>';
	echo'<td class="textgau">'.$ligne['adresse'].'</td>';

	echo'<td class="textcen"><a href="Fmodifier.php?id_m='.$ligne['id_m'].
			'&nom_m='.$ligne['nom_m'].
			'&prenom_m='.$ligne['prenom_m'].
			//'&contact='.$ligne['contact'].
			'&nom_f='.$ligne['nom_f'].
			'&prenom_f='.$ligne['prenom_f'].
			'&adresse='.$ligne['adresse'].
			'"><img src="/Images/modifier.png" width="25px"height="25px" class="img" title="Modifier"></a></td>';
	echo'<td class="textcen"><a href="Fsupprimer.php?id_m='.$ligne['id_m'].
			'&nom_m='.$ligne['nom_m'].
			'&prenom_m='.$ligne['prenom_m'].
			//'&contact='.$ligne['contact'].
			'&nom_f='.$ligne['nom_f'].
			'&prenom_f='.$ligne['prenom_f'].
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
