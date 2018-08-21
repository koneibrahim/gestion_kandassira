<?php

/*---------Debut Produit.php-------*/
	include'../../Layout/header.php';
		echo'<div id="logosahel">';
		 		echo'<img src="../../Images/sahel.png" width="100%" height="100%" alt="">';
		echo '</div>';
		echo '<div id="logoyogo">';
		 		echo'<img src="../../Images/yogotte.jpg" width="100%" height="100%" alt="">';
		echo '</div>';
		echo '<div id="logoprod">';
		 		echo'<img src="../../Images/produit.png" width="100%" height="100%" alt="">';
		echo '</div>';
	include'../../Layout/header2.php';
	include'CRUD.php';
	echo'<div id="contleft">';
				echo'<h3 class="titrecform textcen">Liste des produits</h3><br/>';
				echo'<table cellpadding="3"  class="w90">';
				echo'<tr class="thtable">';
						echo'<th colspan="7" class="textdro thtable"><a href="Pajouter.php">
						<img src="/Images/ajouter.png" width="25px"height="25px" class="img" title="Ajouter"></a></th>';
				echo'</tr>';
				echo'<tr class="thtable">';
						echo'<th class="thtable textcen">N°</th>';
						echo'<th class="thtable textgau">Produit </th>';
						echo'<th class="thtable textcen">Quantité </th>';
						echo'<th colspan="6" class="thtable textgau">Action</th>';
				echo'</tr>';
				$i=1;
				while($ligne=pg_fetch_assoc($produit))
				{
				echo'<tr class="ld'.($i%2).'">';
					  echo'<td class="textcen">'.$i.'</td>';
						echo'<td class="textgau ">'.$ligne['nom_pro'].'</td>';
						echo'<td class="textcen">'.number_format($ligne['qte_pro']).'pièces</td>';
						echo'<td class="textcen"><a href="Pmodifier.php?id_pro='.$ligne['id_pro'].
								'&nom_pro='.$ligne['nom_pro'].
								'&qte_pro='.$ligne['qte_pro'].
								'"><img src="/Images/modifier.png" width="25px"height="25px" class="img" title="Modifier"></a></td>';
						echo'<td class="textcen"><a href="Psupprimer.php?id_pro='.$ligne['id_pro'].
								'&nom_pro='.$ligne['nom_pro'].
								'&qte_pro='.$ligne['qte_pro'].
								'"><img src="/Images/supprimer.png" width="25px"height="25px" class="img" title="Supprimer"></a></td>';
					 //-------- LIEN COMPOSANT--------
					 	echo'<td class="textcen"><a href="composant.php?id_pro='.$ligne['id_pro'].
											'&nom_pro='.$ligne['nom_pro'].
											'&qte_pro='.$ligne['qte_pro'].
											'"><button class="butmenu2"> Composant </button></a></td>';
					echo'</tr>';
				$i++;
				}
				echo'</table>';
				echo'</div>';
	include'../../Layout/footer.php';

				/*----------- Fin Produit.php----------- */

?>
