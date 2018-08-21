<?php
	$id_pro=$_GET['id_pro'];
	$nom_pro=$_GET['nom_pro'];
	$id_ma=$_GET['id_ma'];

	include'produit.php';
	/*---------Debut Composant.php-----*/
	echo'<div id="contright">';
				echo'<h3 class="titrecform textcen"> Les composants du produit '.$nom_pro.'</h3><br/>';
				echo'<table cellpadding="3" border="0" class="w90">';
				echo'<tr class="thtable">';
						echo'<th colspan="7" class="textdro thajouter"><a href="Cajouter.php?id_pro='.$id_pro.
						'&nom_pro='.$nom_pro.'">
						 <img src="/Images/ajouter.png" width="25px"height="25px" class="img" title="Ajouter"></a></th>';
				echo'</tr>';
				echo'<tr>';
						echo'<th class="thtable textcen">N°</th>';
						echo'<th class="thtable textgau">Nom composant</th>';
						echo'<th class="thtable textcen">Quantité </th>';
						echo'<th colspan="7" class="thtable">Action</th>';
				echo'</tr>';
				$i=1;
				while($ligne=pg_fetch_assoc($composant))
				{
				echo'<tr class="ld'.($i%2).'">';
			  echo'<td class="textcen">'.$i.'</td>';
				echo'<td class="textgau">'.$ligne['nom_ma'].'</td>';
				echo'<td class="textcen">'.$ligne['qte_compo'].'</td>';
				echo'<td class="textcen"><a href="Cmodifier.php?id_pro='.$id_pro.
						'&nom_pro='.$ligne['nom_pro'].
						'&id_ma='.$ligne['id_ma'].
						'&nom_ma='.$ligne['nom_ma'].
						'&qte_compo='.$ligne['qte_compo'].
						'"><img src="/Images/modifier.png" width="25px"height="25px" class="img" title="Modifier"></a></td>';
				echo'<td class="textcen"><a href="Csupprimer.php?id_pro='.$id_pro.
						'&id_ma='.$ligne['id_ma'].
						'&nom_ma='.$ligne['nom_ma'].
						'&qte_compo='.$ligne['qte_compo'].
						'"><img src="/Images/supprimer.png" width="25px"height="25px" class="img" title="Supprimer"></a></td>';
				echo'</tr>';
				$i++;
				}
				echo'</table>';
	echo'</div>';
	include'../../Layout/footer.php';

	/*-------Fin  Composant.php-----------*/
?>
