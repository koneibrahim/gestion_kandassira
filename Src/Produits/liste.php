
<?php
	/*------Debut  Liste.php----------*/
	include'../../Layout/header.php';
	include'../../Layout/header2.php';

			echo '<div id="menu2">';
						echo ' <a href="/Src/Reservations/liste.php"><button class="bm2">Reservations</button> </a>';
						echo ' <a href="/Src/Mariages/liste.php"> <button class="bm2">Kodumani</button> </a>';
						echo ' <a href="/Src/Prestations/liste.php"> <button class="bm2">Prestations</button> </a>';
						echo ' <a href="/Src/Produits/liste.php"> <button class="bm2">Produits</button> </a>';
						echo ' <a href="/Src/Seminaires/liste.php"> <button class="bm2">Seminaires</button> </a>';
			echo '</div>';

      include'CRUD.php';

      	echo'<div id="content">';
        	 echo'<h3 class="titrecform textcen">Produits</h3><br/>';
      	   echo'<table cellpadding="13" class="w90">';
            	echo'<tr class="thtable">';
            	echo'<th colspan="5" class="textdro thtable"></th></a></th>';
            	echo'</tr>';
            	echo'<tr>';
            	echo'<th class="thtable textcen">N°</th>';
            	echo'<th class="thtable textgau">Nom produit </th>';
							echo'<th class="thtable textgau">Prix vente </th>';
							echo'<th class="thtable textcen">Type produit</th>';
            	echo'<th class="thtable textcen">Quantité restante</th>';
            	echo'<th class="thtable textcen">Quantité vendue</th>';
            	echo'</tr>';
            	$i=1;
            	while($ligne=pg_fetch_assoc($resultat))
            	{
            	echo'<tr class="ld'.($i%2).'">';
               echo'<td class="textcen">'.$i.'</td>';
            	echo'<td class="textgau">'.$ligne['nom_pro'].'</td>';
							echo'<td class="textgau">'.$ligne['prix_pro'].'</td>';
							echo'<td class="textgau">'.$ligne['type_pro'].'</td>';
            	echo'<td class="textcen">'.$ligne['qte_vir'].'</td>';
            	echo'<td class="textcen">'.$ligne['qte_reel'].'</td>';
            	echo'</tr>';
            	$i++;
            	}
      	   echo'</table>';
      	echo'</div>';

    include'../../Layout/footer.php';

      		/*------Fin Liste.php----------*/

?>
