<?php
	/*------Debut  Liste.php----------*/

	include'../../Layout/header.php';
	include'../../Layout/header2.php';
	include'../../Layout/retour.php';

			echo '<div id="logo">';

			echo '</div>';
					echo '<div id="menu2">';

					echo '</div>';
				include'CRUD.php';
				if($_SESSION['group']=='3'||$_SESSION['group']=='2') {

				echo'<div id="content">';

				echo'<h3 class="titrecform textgau">Etat de stock des produits </h3><br/>';
				echo'<table cellpadding="13" class="w90">';
				echo'<tr class="thtable">';
				echo'<th colspan="5" class="textdro thtable"></th></a></th>';
				echo'</tr>';

				echo'<tr>';
				echo'<th class="thtable textcen">N°</th>';
				echo'<th class="thtable textgau">Nom article </th>';
				echo'<th class="thtable textcen">Unité </th>';
				echo'<th class="thtable textcen">Quantité vendue</th>';
				echo'<th class="thtable textcen">Quantité restante</th>';

				echo'</tr>';
				$i=1;
				while($ligne=pg_fetch_assoc($resultat))
				{
				echo'<tr class="ld'.($i%2).'">';
			   echo'<td class="textcen">'.$i.'</td>';
				echo'<td class="textgau">'.$ligne['nom_ma'].'</td>';
				echo'<td class="textcen">'.$ligne['unite'].'</td>';
				echo'<td class="textcen">'.$ligne['qte_vir'].'</td>';
				echo'<td class="textcen">'.$ligne['qte_reel'].'</td>';
				echo'</tr>';
				$i++;
				}
					echo'</table>';
				echo'</div>';
			}
	include'../../Layout/footer.php';

		/*------Fin Liste.php----------*/

?>
