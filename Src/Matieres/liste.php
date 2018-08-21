

<?php

	include'../../Layout/header.php';

		echo '<div id="logosahel">';
			// 	echo'<img src="../../Images/sahel.png" width="100%" height="100%" alt="">';
		echo '</div>';

		echo '<div id="logoyogo">';
			 //	echo'<img src="../../Images/yogotte.jpg" width="100%" height="100%" alt="">';
		echo '</div>';

	include'../../Layout/header2.php';

		echo '<div id="menu2">';
			/* 	echo'<img src="../../Images/matieres.png" width="60%" height="20%" alt="">';*/
		echo '</div>';

	include'CRUD.php';

	echo'<div id="content">';
	echo'<h3 class="titrecform textgau">Liste des Articles </h3><br/>';
	echo'<table cellpadding="3" class="w90">';
	echo'<tr class="thajouter">';
	echo'<th colspan="6" class="textdro thtable"><a href="Fajouter.php">
	<img src="/Images/ajouter.png" width="25px"height="25px" class="img" title="Ajouter"></a></th>';

	echo'</tr>';
	echo'<tr>';
	echo'<th class="thtable textcen">N°</th>';
	echo'<th class="thtable textgau">Nom produit </th>';
	echo'<th class="thtable textcen">Taille/Type </th>';
	echo'<th class="thtable textdro">Prix_Unitaire</th>';
	echo'<th colspan="2" class="thtable">Action</th>';
	echo'</tr>';
	$i=1;
	while($ligne=pg_fetch_assoc($resultat))
	{
	echo'<tr class="ld'.($i%2).'">';
   echo'<td class="textcen">'.$i.'</td>';
	echo'<td class="textgau">'.$ligne['nom_ma'].'</td>';
	echo'<td class="textcen">'.$ligne['unite'].'</td>';
	echo'<td class="textdro ">'.number_format($ligne['prix_ma'],0,' ',' ').'<sup>F</sup></td>';
	echo'<td class="textcen"><a href="Fmodifier.php?id_ma='.$ligne['id_ma'].
			'&nom_ma='.$ligne['nom_ma'].
			'&unite='.$ligne['unite'].
			'&prix_ma='.$ligne['prix_ma'].
			'"><img src="/Images/modifier.png" width="25px"height="25px" class="img" title="Modifier"></a></td>';
	echo'<td class="textcen"><a href="Fsupprimer.php?id_ma='.$ligne['id_ma'].
			'&nom_ma='.$ligne['nom_ma'].
			'&unite='.$ligne['unite'].
			'&prix_ma='.$ligne['prix_ma'].
			'"><img src="/Images/supprimer.png" width="25px"height="25px" class="img" title="Supprimer"></a></td>';
	echo'</tr>';
	$i++;
	}
	echo'</table>';

	echo'</div>';
	include'../../Layout/footer.php';

?>
