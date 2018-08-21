<?php
	 		/* -----Debut Liste.php----------- */
	include'../../Layout/header.php';
	  echo'<div id="logosahel">';
		 	//	 echo'<img src="../../Images/sahel.png" width="100%" height="100%" alt="">';
		echo'</div>';
		echo'<div id="logoyogo">';
//echo'<img src="../../Images/yogotte.jpg" width="100%" height="100%" alt="">';
		echo'</div>';
	include'../../Layout/header2.php';
	  echo '<div id="menu2">';
		 /*   	echo'<img src="../../Images/fournisseurs.png" width="60%" height="20%" alt="">';*/
		echo '</div>';

	include'CRUD.php';
	echo'<div id="content">';

	echo'<h3 class="titrecform textgau">Liste des personnels</h3><br/>';
	echo '<table cellpadding="3" border="0" class="w90">';
	echo '<tr class="thajouter">';
	echo '<th colspan="8" class="textdro thtable"><a href="Fajouter.php">
	<img src="/Images/ajouter.png" width="25px"height="25px" class="img" title="Ajouter"></a></th>';
	echo '</tr>';
	echo '<tr class="cth">';
	echo	'<th class="thtable textcen">N°</th>';
	echo	'<th class="thtable textgau">Nom </th>';
	echo	'<th class="thtable textgau">Prénom </th>';
	echo	'<th class="thtable textgau">Fonction </th>';
	echo	'<th class="thtable textcen">Téléphone </th>';
	echo	'<th class="thtable textcen">Addresse </th>';
	echo	'<th colspan="2" class="thtable">Action</th>';
	echo'</tr>';
	$i=1;
	while($ligne=pg_fetch_assoc($resultat))
	{
	echo'<tr class="ld'.($i%2).'">';
  echo'<td class="textcen">'.$i.'</td>';
	echo'<td class="textgau">'.$ligne['nom_p'].'</td>';
	echo'<td class="textgau">'.$ligne['prenom_p'].'</td>';
	echo'<td class="textgau">'.$ligne['fonction'].'</td>';
	echo'<td class="textcen">'.$ligne['tel'].'<sup></sup></td>';
	echo'<td class="textcen">'.$ligne['adresse'].'</td>';
	echo'<td class="textcen"><a href="Fmodifier.php?id_p='.$ligne['id_p'].
			'&nom_p='.$ligne['nom_p'].
			'&prenom_p='.$ligne['prenom_p'].
			'&fonction='.$ligne['fonction'].
			'&tel='.$ligne['tel'].
			'&adresse='.$ligne['adresse'].
			'"><img src="/Images/modifier.png" width="25px"height="25px" class="img" title="Modifier"></a></td>';
	echo'<td class="textcen"><a href="Fsupprimer.php?id_p='.$ligne['id_p'].
			'&nom_p='.$ligne['nom_p'].
			'&prenom_p='.$ligne['prenom_p'].
			'&fonction='.$ligne['fonction'].
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
