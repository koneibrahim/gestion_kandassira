
<?php

	include'../../Layout/header.php';
	include'../../Layout/header2.php';
	include'../../Layout/retour.php';

		echo '<div id="menu2">';
				
		echo '</div>';

	include'CRUD.php';

	echo'<div id="content">';
	echo'<h3 class="titrecform textgau">Liste des produits </h3><br/>';
	echo'<table cellpadding="3" class="w90">';
	echo'<tr class="thajouter">';
	echo'<th colspan="6" class="textdro thtable"><a href="Fajouter.php">
	<img src="/Images/ajouter.png" width="25px"height="25px" class="img" title="Ajouter"></a></th>';

	echo'</tr>';
	echo'<tr>';
	echo'<th class="thtable textcen">N°</th>';
	echo'<th class="thtable textgau">Nom article </th>';
	echo'<th class="thtable textdro">Prix</th>';
	echo'<th class="thtable textcen">Categorie produit</th>';

	echo'<th colspan="2" class="thtable">Action</th>';
	echo'</tr>';
	$i=1;
	while($ligne=pg_fetch_assoc($resultat))
	{
	echo'<tr class="ld'.($i%2).'">';
  echo'<td class="textcen">'.$i.'</td>';
	echo'<td class="textgau">'.$ligne['nom_pro'].'</td>';
	echo'<td class="textdro ">'.number_format($ligne['prix'],0,' ',' ').'<sup>F</sup></td>';
	echo'<td class="textcen">'.$ligne['nom_catpro'].'</td>';

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
